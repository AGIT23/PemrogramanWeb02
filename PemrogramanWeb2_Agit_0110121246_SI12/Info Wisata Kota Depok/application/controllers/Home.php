<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->model('M_Master');
	}

	public function index()
	{
		if (!$this->session->userdata('user')) {
			$this->M_Master->warning('Silahkan login terlebih dahulu');
			redirect('login');
		}

        $select = "tempat_wisata.*, jenis_wisata.nama jenis_wisata_nama, kecamatan.nama kecamatan_nama";
        $join = [
            [
                'table' => 'jenis_wisata',
                'fk' => "tempat_wisata.jenis_id=jenis_wisata.id",
            ],
            [
                'table' => 'kecamatan',
                'fk' => "tempat_wisata.kecamatan_id=kecamatan.id",
            ],
        ];
        $data['data'] = $this->M_Master->get_join_id('tempat_wisata', $join, null, $select, "tempat_wisata.id")->result();

		$this->load->view('template/landing', $data);
	}

	public function detail($id = null)
	{
        if (!$id) redirect('/');

        if ($this->input->method(TRUE) == 'POST') {
			$nilai_rating = $this->input->post('nilai_rating');
			$komentar = $this->input->post('komentar');

			$this->M_Master->add('komentar', [
				'tanggal' => date('Y-m-d'),
				'isi' => $komentar,
				'users_id' => $this->session->userdata('user')->id,
				'wisata_id' => $id,
				'nilai_rating_id' => $nilai_rating,
			]);

			$this->M_Master->success('Anda berhasil memberi komentar');
			redirect('/');
		}

		$data['nilai_rating'] = $this->M_Master->get('nilai_rating')->result();
        $select = "tempat_wisata.*, jenis_wisata.nama jenis_wisata_nama, kecamatan.nama kecamatan_nama";
        $join = [
            [
                'table' => 'jenis_wisata',
                'fk' => "tempat_wisata.jenis_id=jenis_wisata.id",
            ],
            [
                'table' => 'kecamatan',
                'fk' => "tempat_wisata.kecamatan_id=kecamatan.id",
            ],
        ];
        $data['detail'] = $this->M_Master->get_join_id('tempat_wisata', $join, ['tempat_wisata.id' => $id], $select, "tempat_wisata.id")->row();

		$this->load->view('template/detail', $data);
	}

	public function login() {
        if ($this->input->method(TRUE) == 'POST') {
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$where = [
				'email' => $email,
				'password' => $password,
			];

			$cek = $this->M_Master->get_id('users', $where)->row();

			if ($cek) {
				$this->session->set_userdata('user', $cek);
				$this->M_Master->success('Anda berhasil login');

				if ($cek->role === 'public') {
					redirect('/');
				} else {
					redirect('admin/jenis-wisata');
				}
			} else {
				$this->M_Master->warning('Email atau password salah');
				redirect('login');
			}
        }

		$this->load->view('template/login');
	}

	public function register()
	{
        if ($this->input->method(TRUE) == 'POST') {
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			$where = "username = '$username' or email = '$email'";

			$cek = $this->M_Master->get_id('users', $where)->row();

			if (!$cek) {
                $add = $this->M_Master->add('users', [
					'username' => $username,
					'email' => $email,
					'password' => $password,
					'status' => 1,
					'created_at' => date('Y-m-d H:i:s'),
					'role' => 'public',
				]);
				$this->M_Master->success('Anda berhasil register');
				redirect('login');
			} else {
				$this->M_Master->warning('Username atau email sudah terdaftar');
				redirect('register');
			}
        }

		$this->load->view('template/register');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}