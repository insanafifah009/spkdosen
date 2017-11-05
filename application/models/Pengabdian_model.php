<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Pengabdian_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function addKegiatan($data){

		$result = $this->db->insert('pengabdian',$data);
		return $result;
	}
	public function getKegiatan(){
		$this->db->select('*');
		$this->db->from('pengabdian');
		$query=$this->db->get();
		return $query->result_array();
	}
	
	public function get_pengabdian(){
		$query =$this->db->query('SELECT * FROM pengabdian JOIN unsur_kegiatan ON pengabdian.`unsur`=unsur_kegiatan.`id_unsur` JOIN sub_kegiatan ON pengabdian.`sub`=sub_kegiatan.`id_sub` JOIN `uraian_kegiatan` ON pengabdian.`uraian`=`uraian_kegiatan`.`id_uraian` JOIN dosen ON pengabdian.`id_dosen`=dosen.`id_dosen`');
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


	




