<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('Dosen_model');
        $dosen = $this->Dosen_model->getAll();
        $data['dosen'] = $dosen;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Dosen/index', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id){
        $this->load->model('Dosen_model');
        $guru= $this->Dosen_model->getById($id);
        $data['guru'] = $guru; 

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}
