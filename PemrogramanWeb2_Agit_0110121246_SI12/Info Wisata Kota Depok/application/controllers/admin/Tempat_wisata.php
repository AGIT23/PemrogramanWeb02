<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_wisata extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->title = 'Tempat Wisata';
		$this->table = 'tempat_wisata';

		$this->load->model('M_Master');
	}

    public function index()
    {
        $select = "{$this->table}.*, jenis_wisata.nama jenis_wisata_nama, kecamatan.nama kecamatan_nama";
        $join = [
            [
                'table' => 'jenis_wisata',
                'fk' => "{$this->table}.jenis_id=jenis_wisata.id",
            ],
            [
                'table' => 'kecamatan',
                'fk' => "{$this->table}.kecamatan_id=kecamatan.id",
            ],
        ];
        $data['data'] = $this->M_Master->get_join_id($this->table, $join, null, $select, "{$this->table}.id")->result();
		$data['title'] = $this->title;
		$data['view'] = $this->table.'/index';

		$this->load->view('template/index', $data);
    }

    public function form($id = null)
    {
        if ($this->input->method(TRUE) == 'POST') {
            $jenis_wisata = $this->input->post('jenis_wisata');
            $kecamatan = $this->input->post('kecamatan');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $latlong = $this->input->post('latlong');
            $skor_rating = $this->input->post('skor_rating');
            $harga_tiket = $this->input->post('harga_tiket');
            $website = $this->input->post('website');
            $fasilitas = $this->input->post('fasilitas');

            $data   = [
                'jenis_id' => $jenis_wisata,
                'kecamatan_id' => $kecamatan,
                'nama' => $nama,
                'alamat' => $alamat,
                'latlong' => $latlong,
                'skor_rating' => $skor_rating,
                'harga_tiket' => $harga_tiket,
                'website' => $website,
                'fasilitas' => $fasilitas,
            ];
            $msg    = 'Berhasil tambah data';
            
            $fotos = ['foto1', 'foto2', 'foto3'];
            foreach ($fotos as $value) {
                if ($_FILES[$value]['name']) {
                    $new_name = time() . $_FILES[$value]['name'];
                    $config['file_name'] = $new_name;
                    $config['upload_path'] = './public/foto/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $this->load->library('upload', $config);
    
                    create_folder(FCPATH . str_replace('./', '', $config['upload_path']));
                    if (!$this->upload->do_upload($value)) {
                        $error = array('error' => $this->upload->display_errors());
    
                        $this->M_Master->warning(implode('<br>', $error));
                        $id = $id ? $id : '';
                        redirect('admin/tempat-wisata/form/' . $id);
                    } else {
                        $data[$value] = $this->upload->data()['file_name'];
                        $upload_data = array('upload_data' => $this->upload->data());
                    }
                }
            }

            if (!empty($id)) {
                $where  = ['id' => $id];
                $detail = $this->M_Master->get_id($this->table, $where)->row();

                if ($detail->foto1) {
                    unlink($config['upload_path'].$detail->foto1);
                }
                if ($detail->foto2) {
                    unlink($config['upload_path'].$detail->foto2);
                }
                if ($detail->foto3) {
                    unlink($config['upload_path'].$detail->foto3);
                }

                $edit   = $this->M_Master->edit($this->table, $data, $where);
                $msg    = 'Berhasil ubah data';
            } else {
                $add    = $this->M_Master->add($this->table, $data);
            }

            $this->M_Master->success($msg);
            redirect('admin/tempat-wisata');
        }

        $data['jenis_wisata'] = $this->M_Master->get('jenis_wisata')->result();
        $data['kecamatan'] = $this->M_Master->get('kecamatan')->result();
        $data['detail'] = $id ? $this->M_Master->get_id($this->table, ['id' => $id])->row() : null;
        $data['title'] = $this->title;
        $data['view'] = $this->table . '/form';

        $this->load->view('template/index', $data);
    }

	public function komentar($id = null) {
        if (!$id) redirect('admin/tempat-wisata');

        $select = "komentar.*, nilai_rating.nama nilai_rating_nama, users.email users_email, ";
        $join = [
            [
                'table' => 'nilai_rating',
                'fk' => 'komentar.nilai_rating_id=nilai_rating.id',
            ],
            [
                'table' => 'users',
                'fk' => 'komentar.users_id=users.id',
            ],
        ];
        $data['data'] = $this->M_Master->get_join_id('komentar', $join, ['wisata_id' => $id], $select, 'komentar.id')->result();
        $data['tempat_wisata'] = $this->M_Master->get_id($this->table, ['id' => $id])->row();
        $data['title'] = 'Komentar';
        $data['view'] = $this->table . '/komentar';

        $this->load->view('template/index', $data);
	}

    public function delete($id)
    {
        $where  = ['id' => $id];
        $del    = $this->M_Master->del($this->table, $where);
        $this->M_Master->success('Berhasil hapus data');

        redirect('admin/tempat-wisata');
    }
}
