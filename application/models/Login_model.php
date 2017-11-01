<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Login_model extends CI_model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	function login($username,$password){
		$query = $this->db->query("SELECT * from dosen where username = ? and password=? ", array($username, $password));
		if ($query) {
			return $query;
		}else{
			return false;
		}
		
		$query = null;
		unset($username, $password);
	}
	public function ac_master($id_s){
		$query_m=$this->db->query("select*from dosen where id_dosen='$id_d'");
		return $query_m->row();
	}
}
 ?>