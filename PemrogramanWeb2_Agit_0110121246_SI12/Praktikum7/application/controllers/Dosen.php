<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nidn = '01203';
        $this->dsn1->nama = 'Prof. Dr. Gilang Darma';
        $this->dsn1->gender = 'L';
        $this->dsn1->pendidikan = 'Statitiska';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nidn = '02345';
        $this->dsn2->nama = 'Prof. Dr. Mira Akerman';
        $this->dsn2->gender = 'P';
        $this->dsn2->pendidikan = 'Sejarah';
        
        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nidn = '03345';
        $this->dsn3->nama = 'Dr. Bambang';
        $this->dsn3->gender = 'L';
        $this->dsn3->pendidikan = 'Teknik Pendidikan';
        
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Dosen', $data);
        $this->load->view('layouts/footer');
    }
}
