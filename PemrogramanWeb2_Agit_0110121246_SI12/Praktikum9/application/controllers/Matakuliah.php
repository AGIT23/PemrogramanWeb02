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
        $matkul= $this->Matakuliah_model->getById($id);
        $data['matkul'] = $matkul;
       
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }

    public function form(){ 
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Matakuliah/form');
        $this->load->view('layouts/footer');
    }

    public function save(){
        $this->load->model('Matakuliah_model','matakuliah');
        $_nama= $this->input->post('nama');
        $_sks = $this->input->post('sks');
        $_kode = $this->input->post('kode');
        $_Dosen = $this->input->post('Dosen');
       

        $data_matakuliah['nama'] = $_nama;
        $data_matakuliah['sks'] = $_sks;
        $data_matakuliah['kode']= $_kode;
        $data_matakuliah['Dosen']=$_Dosen;
       

        if(!empty($_idedit)){
            $data_matakuliah['id']=$_idedit;
            $this->matakuliah->update($data_matakuliah);   
        }
        else{
            $this->matakuliah->simpan($data_matakuliah);
        }
        redirect('matakuliah','refresh'); 
        
    }

    public function edit($id){
        //akses model matakuliah
        $this->load->model('Matakuliah_model','matakuliah');
        $obj_matakuliah = $this->matakuliah->getById($id);
        $data['obj_matakuliah']=$obj_matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('Matakuliah/edit', $data);
        $this->load->view('layouts/footer');

    }

    public function delete($id){
        $this->load->model('Matakuliah_model','matakuliah');
        //data mahasiswa berdasarkan id
        $data_matakuliah['id'] = $id;
        $this->matakuliah->delete($data_matakuliah);
        redirect('matakuliah','refresh');
    }
    
}
