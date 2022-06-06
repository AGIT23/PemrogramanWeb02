<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		
		
		$this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view("home");
        $this->load->view('layouts/footer');
		
		// echo "Hello World";
	}
}
