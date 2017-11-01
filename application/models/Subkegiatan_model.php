<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Subkegiatan_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	public function addSubkegiatan($tabel,$data){
		$result = $this->db->insert($tabel,$data);
		return $result;
	}
	public function getSubkegiatan(){
		$this->db->select('*');
		$this->db->from('sub_kegiatan');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function editSubkegiatan($tabel,$data,$param){
		$this->db->where('id_detail',$param);
		$this->db->update($tabel,$data);
		if ($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function deleteSubkegiatan($id){
		$this->db->where('id_detail',$id);
		$this->db->delete('sub_kegiatan');
		if ($this->db->affected_rows() > 0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}

