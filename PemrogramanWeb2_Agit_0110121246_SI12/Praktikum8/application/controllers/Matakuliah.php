<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('Matakuliah_model');
        $matkul = $this->Matakuliah_model->getAll();
        $data['matkul'] = $matkul;
       
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }

    public function detail($id)
    {
        $this->load->model('Matakuliah_model');
        $m = $this->Matakuliah_model->getById($id);
        $data['m'] = $m;
       
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }
}
