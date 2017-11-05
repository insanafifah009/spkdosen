<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Penelitian_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function addJudul($data){

		$result = $this->db->insert('penelitian',$data);
		return $result;
	}
	public function getJudul_id($judul){
		$this->db->select('*');
		$this->db->from('penelitian');
		$this->db->where('judul',$judul);
		$query = $this->db->get();
		return $query;
	}
	public function get_penelitian(){
		$query =$this->db->query('SELECT * FROM penelitian JOIN unsur_kegiatan ON penelitian.`unsur`=unsur_kegiatan.`id_unsur` JOIN sub_kegiatan ON penelitian.`sub`=sub_kegiatan.`id_sub` JOIN `uraian_kegiatan` ON penelitian.`uraian`=`uraian_kegiatan`.`id_uraian` JOIN dosen ON penelitian.`id_dosen`=dosen.`id_dosen`');
		return $query->result_array();
	}
	// public function editUnsur($tabel,$data,$param){
	// 	$this->db->where('id_unsur',$param);
	// 	$this->db->update($tabel,$data);
	// 	if ($this->db->affected_rows() > 0){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }
	// public function deleteUnsur($id){
	// 	$this->db->where('id_unsur',$id);
	// 	$this->db->delete('unsur_kegiatan');
	// 	if ($this->db->affected_rows() > 0){
	// 		return TRUE;
	// 	}
	// 	else{
	// 		return FALSE;
	// 	}
	// }
}


	




