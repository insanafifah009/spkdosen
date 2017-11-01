<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Unsur_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	public function addUnsur($tabel,$data){

		$result = $this->db->insert($tabel,$data);
		return $result;
	}
	public function getUnsur(){
		$this->db->select('*');
		$this->db->from('unsur_kegiatan');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function getUnsur_id($id){
		$this->db->select('*');
		$this->db->from('unsur_kegiatan');
		$this->db->where('id_unsur',$id);
		$query = $this->db->get();
		return $query;
	}
	public function editUnsur($tabel,$data,$param){
		$this->db->where('id_unsur',$param);
		$this->db->update($tabel,$data);
		if ($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deleteUnsur($id){
		$this->db->where('id_unsur',$id);
		$this->db->delete('unsur_kegiatan');
		if ($this->db->affected_rows() > 0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}


	




