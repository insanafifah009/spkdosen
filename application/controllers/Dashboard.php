<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('level')=='1') {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('atribut/header');
		$this->load->view('dosen/main');
		$this->load->view('atribut/footer');
	}
}
