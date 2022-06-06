<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->kode = 'MK001';
        $this->mk1->nama = 'Bahasa Indonesia';
        $this->mk1->sks = 2;

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->kode = 'MK002';
        $this->mk2->nama = 'Dasar Pemrograman';
        $this->mk2->sks = 4;

        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->id = 3;
        $this->mk3->kode = 'MK003';
        $this->mk3->nama = 'Basis Data';
        $this->mk3->sks = 2;
        
        $list_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['list_mk'] = $list_mk;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Matakuliah', $data);
        $this->load->view('layouts/footer');
    }
}
