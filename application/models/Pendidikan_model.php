<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Pendidikan_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}
	// public function addNip($data){

	// 	$result = $this->db->insert('pendidikan',$data);
	// 	return $result;
	// }
	// public function getNip(){
	// 	$this->db->select('*');
	// 	$this->db->from('pendidikan');
	// 	$query=$this->db->get();
	// 	return $query->result_array();
	// }
	// public function getNip_id($nip){
	// 	$this->db->select('*');
	// 	$this->db->from('pendidikan');
	// 	$this->db->where('nip',$nip);
	// 	$query = $this->db->get();
	// 	return $query;
	// }
	public function addTempat($data){

		$result = $this->db->insert('pendidikan',$data);
		return $result;
	}
	public function getTempat(){
		$this->db->select('*');
		$this->db->from('pendidikan');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function getTempat_id($tempat){
		$this->db->select('*');
		$this->db->from('pendidikan');
		$this->db->where('tempat',$tempat);
		$query = $this->db->get();
		return $query;
	}
	public function get_pendidikan(){
		$query =$this->db->query('SELECT * FROM pendidikan JOIN unsur_kegiatan ON pendidikan.`unsur`=unsur_kegiatan.`id_unsur` JOIN sub_kegiatan ON pendidikan.`sub`=sub_kegiatan.`id_sub` JOIN `uraian_kegiatan` ON pendidikan.`uraian`=`uraian_kegiatan`.`id_uraian` JOIN dosen ON pendidikan.`id_dosen`=dosen.`id_dosen`');
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


	




