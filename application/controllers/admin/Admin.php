<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('atribut/header');
		$this->load->view('pages/profil');
		$this->load->view('atribut/footer');
	}
	public function edit()
	{
		$this->load->view('atribut/header');
		$this->load->view('pages/editprofil');
		$this->load->view('atribut/footer');
	}
	public function ubah()
	{
		$this->load->view('atribut/header');
		$this->load->view('pages/ubahpass');
		$this->load->view('atribut/footer');
	}
	
}
