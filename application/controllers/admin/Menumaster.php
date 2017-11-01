<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menumaster extends CI_Controller {

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
	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		date_default_timezone_get("Asia/Jakarta");
		$this->load->model('unsur_model');
		$this->load->model('subkegiatan_model');
		$this->load->model('uraian_model');
	}

	public function index()
	{
		$data ['unsur_kegiatan']=$this->unsur_model->getUnsur();
		$this->load->view('atribut/header');
		$this->load->view('admin/menumaster/unsur',$data);
		$this->load->view('atribut/footer');
	}
	public function indexa()
	{
		$data ['sub_kegiatan']=$this->subkegiatan_model->getSubkegiatan();
		$this->load->view('atribut/header');
		$this->load->view('admin/menumaster/subkegiatan',$data);
		$this->load->view('atribut/footer');
	}
	public function indexb()
	{
		$this->load->view('atribut/header');
		$this->load->view('admin/menumaster/uraian');
		$this->load->view('atribut/footer');
	}

	public function addunsur()
	{
		$data= array(
			"nama_unsur"=> $this->input->post('txt_unsur')
		);	
		$result =$this->unsur_model->addUnsur('unsur_kegiatan',$data);
		redirect('admin/Menumaster');
	}
	
	public function getUnsur($id)
	{
		$data['pendidikan']=$this->unsur_model->getUnsur($id)->row();
		$this->load->view('atribut/header');
		$this->load->view('admin/menumaster/editunsur',$data);
		$this->load->view('atribut/footer');
	}
	public function editUnsur(){
		$id=$this->input->post('edit_idunsur');
		$data=array(
			"nama_unsur"=>$this->input->post('txt_unsur')
		);
		$result=$this->unsur_model->editUnsur('unsur_kegiatan',$data,$id);
		if ($result>=0) {
			redirect('admin/Menumaster');
		}else{
			redirect('admin/Menumaster');
		}
	}
	public function deleteUnsur($id){
		$result =$this->unsur_model->deleteUnsur($id);
		if($result>=1){
			redirect('admin/Menumaster');
		}

	}

	public function addsubkegiatan()
	{
		$data= array(
			"nama_detail"=> $this->input->post('txt_detail')
		);	
		$result =$this->subkegiatan_model->addSubkegiatan('sub_kegiatan',$data);
		redirect('admin/Menumaster');
	}
	public function getSubkegiatan($id)
	{
		$data['pendidikan']=$this->subkegiatan_model->getSubkegiatan($id);
		$this->load->view('atribut/header');
		$this->load->view('admin/menumaster/editsubkegiatan',$data);
		$this->load->view('atribut/footer');
	}
	public function editSubkegiatan(){
		$id=$this->input->post('edit_idsubkegiatan');
		$data=array(
			"nama_detail"=>$this->input->post('txt_detail')
		);
		$result=$this->subkegiatan_model->editSubkegiatan('sub_kegiatan',$data,$id);
		if ($result>=0) {
			redirect('admin/Menumaster');
		}else{
			redirect('admin/Menumaster');
		}
	}
	public function deleteSubkegiatan($id){
		$result =$this->subkegiatan_model->deleteSubkegiatan($id);
		if($result>=1){
			redirect('admin/Menumaster');
		}

	}
	public function adduraian()
	{
		$data= array(
			"nama_uraian"=> $this->input->post('txt_uraian')
		);	
		$result =$this->uraian_model->addUraian('uraian_kegiatan',$data);
		redirect('admin/Menumaster');
	}
	public function getUraian($id)
	{
		$data['pendidikan']=$this->uraian_model->getUraian($id);
		$this->load->view('atribut/header');
		$this->load->view('admin/menumaster/edituraian',$data);
		$this->load->view('atribut/footer');
	}
	public function editUraian(){
		$id=$this->input->post('edit_iduraian');
		$data=array(
			"nama_uraian"=>$this->input->post('txt_uraian')
		);
		$result=$this->uraian_model->editUraian('uraian_kegiatan',$data,$id);
		if ($result>=0) {
			redirect('admin/Menumaster');
		}else{
			redirect('admin/Menumaster');
		}
	}
	public function deleteUraian($id){
		$result =$this->uraian_model->deleteUraian($id);
		if($result>=1){
			redirect('admin/Menumaster');
		}

	}
}

