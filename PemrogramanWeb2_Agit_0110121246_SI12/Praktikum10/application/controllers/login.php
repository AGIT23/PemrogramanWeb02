<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('layouts/header2');
        $this->load->view('login/index');
        $this->load->view('layouts/footer2');
	}

	public function auth(){
		$username =  $this->input->post('username');
		$password = $this->input->post('password');


		if ($username == 'admin' && $password == 'admin')  {
			$userdata = [
				"username" => $username,
				"logged_in" => TRUE,
	
			];
			$this->session->set_userdata($userdata);
			redirect('/mahasiswa');
			redirect('/Dosen');
			redirect('/Matakuliah');
		}elseif($username == 'mahasiswa' && $password == 'mahasiswa'){
			$userdata = [
				"username" => $username,
				
	
			];
			$this->session->set_userdata($userdata);
			redirect('/matakuliah');
		}
		
		else {
			redirect('/login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/login');
	}
	
	
	

}
?>
