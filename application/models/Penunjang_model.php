<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Penunjang_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function addKegiatan_p($data){

		$result = $this->db->insert('penunjang',$data);
		return $result;
	}
	public function getKegiatan_p(){
		$this->db->select('*');
		$this->db->from('penunjang');
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function get_penunjang(){
		$query =$this->db->query('SELECT * FROM penunjang JOIN unsur_kegiatan ON penunjang.`unsur`=unsur_kegiatan.`id_unsur` JOIN sub_kegiatan ON penunjang.`sub`=sub_kegiatan.`id_sub` JOIN `uraian_kegiatan` ON penunjang.`uraian`=`uraian_kegiatan`.`id_uraian` JOIN dosen ON penunjang.`id_dosen`=dosen.`id_dosen`');
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


	




