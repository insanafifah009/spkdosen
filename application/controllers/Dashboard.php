<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata('level')=='1' and (!$this->$this->session->userdata('username'))) {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('atribut/header');
		$this->load->view('tes');
		$this->load->view('atribut/footer');
	}
	
}
