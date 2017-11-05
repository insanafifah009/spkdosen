<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputDosen extends CI_Controller {

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
<<<<<<< HEAD:application/controllers/dosen/InputDosen.php
		$this->load->view('atribut/header');
		$this->load->view('dosen/data');
=======
		$this->load->view('atribut/headeradmin');
		$this->load->view('admin/main');
>>>>>>> d59cc3bd4b3bbd1bca87a8fc7de24094379c43f2:application/controllers/admin/Admin.php
		$this->load->view('atribut/footer');
	}
	public function edit()
	{
<<<<<<< HEAD:application/controllers/dosen/InputDosen.php
		$this->load->view('atribut/header');
		$this->load->view('dosen/editprofil');
=======
		$this->load->view('atribut/headeradmin');
		$this->load->view('pages/editprofil');
		$this->load->view('atribut/footer');
	}
	public function ubah()
	{
		$this->load->view('atribut/headeradmin');
		$this->load->view('pages/ubahpass');
>>>>>>> d59cc3bd4b3bbd1bca87a8fc7de24094379c43f2:application/controllers/admin/Admin.php
		$this->load->view('atribut/footer');
	}
	
}
