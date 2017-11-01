<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Uraian_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	public function addUraian($tabel,$data){
		$result = $this->db->insert($tabel,$data);
		return $result;
	}
	public function getUraian(){
		$this->db->select('*');
		$this->db->from('uraian_kegiatan');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function editUraian($tabel,$data,$param){
		$this->db->where('id_uraian',$param);
		$this->db->update($tabel,$data);
		if ($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deleteUraian($id){
		$this->db->where('id_uraian',$id);
		$this->db->delete('uraian_kegiatan');
		if ($this->db->affected_rows() > 0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}

