<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model','logg');
	}

	public function filter($data)
 	{
 		$data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
 		return $data;
 		unset($data);
 	}

	public function index()
	{
		$this->load->view('login');
	}

	public function authentification()
	{
		$username = $this->input->post('txtusername');
		$password = $this->input->post('txtpassword');

		$username = $this->filter($username);
		$password = $this->filter($password);

		$data = $this->logg->login($username, $password)->row();
		if ($data>0) {
			$session = array(
				"username"=>$data->username,
				"level"=>$data->level,
				"nip"=>$data->nip,
				"id"=>$data->id_dosen);
			$this->session->set_userdata($session);
			console.log($session);
			if ($this->session->userdata('level')=='1') {
				redirect('Dashboard');
			}else{
				redirect('Login');
			}
		}

	}
	
 } ?>