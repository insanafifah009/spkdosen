<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputDosen extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('level')=='1') {
			redirect('login');
		}
		$this->load->model('Model_dosen');
	}

	public function index()
	{
		$id = $this->$this->session->userdata('id');
		$dataid['identitas'] = $this->Model_dosen->getIdentitas($id)->row();
		$this->load->view('atribut/header');
		$this->load->view('dosen/data');
		$this->load->view('atribut/footer');
	}
	public function edit()
	{
		$this->load->view('atribut/header');
		$this->load->view('dosen/editprofil');
		$this->load->view('atribut/footer');
	}
	public function ubah()
	{
		$this->load->view('atribut/headeradmin');
		$this->load->view('pages/ubahpass');
		$this->load->view('atribut/footer');
	}
	
}
