<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tampil extends CI_Controller {
    public function index(){
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;

        $this->load->view('layouts/header3');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/tampil', $data);
        $this->load->view('layouts/footer');
    }
	
	
	public function dosen()
    {
        $this->load->model('Dosen_model');
        $dosen = $this->Dosen_model->getAll();
        $data['dosen'] = $dosen;

        $this->load->view('layouts/header3');
        $this->load->view('layouts/sidebar');
        $this->load->view('Dosen/tampil', $data);
        $this->load->view('layouts/footer');
    }

    public function matkul()
    {
        $this->load->model('Matakuliah_model');
        $matkul = $this->Matakuliah_model->getAll();
        $data['matkul'] = $matkul;
       
        $this->load->view('layouts/header3');
        $this->load->view('layouts/sidebar');
        $this->load->view('Matakuliah/tampil', $data);
        $this->load->view('layouts/footer');
    }

	

}
?>
