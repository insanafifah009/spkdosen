<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menudupak extends CI_Controller {

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
	function __construct(){
		parent::__construct();
		$this->load->model('model_dosen');
		$this->load->model('unsur_model');
		$this->load->model('pengabdian_model');
		$this->load->model('pendidikan_model');
		$this->load->model('penelitian_model');
		$this->load->model('penunjang_model');
		$this->load->model('pengajaran_model');
		if (!$this->session->userdata('level')=='1') {
			redirect('login');
		}
	}
	
	public function penelitian()
	{
		$data['penelitian']=$this->penelitian_model->get_penelitian();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/datapenelitian',$data);
		$this->load->view('atribut/footer');
	}
	public function tambahPenelitian()
	{
		$data['penelitian']=$this->unsur_model->getUnsur();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_penelitian',$data);
		$this->load->view('atribut/footer');
	}
	public function pengajaran()
	{
		$data['pengajaran']=$this->pengajaran_model->get_pengajaran();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/datapengajaran',$data);
		$this->load->view('atribut/footer');
	}
	public function tambahPengajaran()
	{
		$data['pengajaran']=$this->unsur_model->getUnsur();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pengajaran',$data);
		$this->load->view('atribut/footer');
	}
	
	public function pengabdian()
	{
		$data['pengabdian']=$this->pengabdian_model->get_pengabdian();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/datapengabdian',$data);
		$this->load->view('atribut/footer');
	}
	public function tambahPengabdian()
	{
		$data['pengabdian']=$this->unsur_model->getUnsur();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pengabdian',$data);
		$this->load->view('atribut/footer');
	}
	public function penunjang()
	{
		$data['penunjang']=$this->penunjang_model->get_penunjang();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/datapenunjang',$data);
		$this->load->view('atribut/footer');
	}
	public function tambahPenunjang()
	{
		$data['penunjang']=$this->unsur_model->getUnsur();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_penunjang',$data);
		$this->load->view('atribut/footer');
	}

	public function editPendidikan(){
		$id=$this->input->post('edit_idpendidikan');
		$data=array(
			"tempat"=>$this->input->post('txt_tempat')
		);
		$result=$this->unsur_model->editPendidikan('pendidikan',$data,$id);
		if ($result>=0) {
			redirect('dosen/Menudupak');
		}else{
			redirect('dosen/Menudupak');
		}
	}
	public function deletePendidikan($id){
		$result =$this->pendidikan_model->deletePendidikan($id);
		if($result>=1){
			redirect('dosen/Menudupak');
		}

	}






	public function addJudul()
	{
		$judul = $this->input->post('txt_judul');
		$data['id_dosen'] = $this->session->userdata('id');
		$data['unsur'] = $this->input->post('cb_unsur');
		$data['sub'] = $this->input->post('cb_detail');
		$data['uraian'] = $this->input->post('cb_uraian');
		$data['judul'] = $this->input->post('txt_judul');
		$data['link']= $this->input->post('txt_link');
		$data['satuan_hasil'] = $this->input->post('txt_satuan');
		$data['jumlah_volume'] = $this->input->post('txt_jumlahv');
		$data['angka_kredit'] = $this->input->post('txt_ak');
		$data['jumlah_ak']= $this->input->post('txt_jumlahak');
		$data['lampiran']= $this->input->post('txt_lamp');

		$result = $this->penelitian_model->addJudul($data);
		redirect('dosen/Menudupak');
	}
	public function getJudul($judul)
	{
		$data['penelitian']=$this->penelitian_model->getJudul($judul)->row();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_penelitian',$data);
		$this->load->view('atribut/footer');
	}
	public function addMK()
	{
		$judul = $this->input->post('txt_mk');
		$data['id_dosen'] = $this->session->userdata('id');
		$data['unsur'] = $this->input->post('cb_unsur');
		$data['sub'] = $this->input->post('cb_detail');
		$data['uraian'] = $this->input->post('cb_uraian');
		$data['matakuliah'] = $this->input->post('txt_mk');
		$data['sks']= $this->input->post('txt_sks');
		$data['semester']= $this->input->post('txt_smt');
		$data['tahun']= $this->input->post('txt_tahun');
		$data['tempat']= $this->input->post('txt_tempat');
		$data['tanggal']= $this->input->post('txt_tgl');
		$data['satuan_hasil'] = $this->input->post('txt_satuan');
		$data['jumlah_volume'] = $this->input->post('txt_jumlahv');
		$data['angka_kredit'] = $this->input->post('txt_ak');
		$data['jumlah_ak']= $this->input->post('txt_jumlahak');
		$data['lampiran']= $this->input->post('txt_lamp');

		$result = $this->pengajaran_model->addMK($data);
		redirect('dosen/Menudupak');
	}
	public function getMK($mk)
	{
		$data['pengajaran']=$this->pengajaran_model->getMK($mk)->row();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pengajaran',$data);
		$this->load->view('atribut/footer');
	}
	
	public function addKegiatan()
	{
		$kegiatan = $this->input->post('txt_keg');
		$data['id_dosen'] = $this->session->userdata('id');
		$data['unsur'] = $this->input->post('cb_unsur');
		$data['sub'] = $this->input->post('cb_detail');
		$data['uraian'] = $this->input->post('cb_uraian');
		$data['kegiatan'] = $this->input->post('txt_keg');
		$data['bentuk']= $this->input->post('txt_bentuk');
		$data['tempat'] = $this->input->post('txt_tempat');
		$data['tanggal']= $this->input->post('txt_tgl');
		$data['satuan_hasil'] = $this->input->post('txt_satuan');
		$data['jumlah_volume'] = $this->input->post('txt_jumlahv');
		$data['angka_kredit'] = $this->input->post('txt_ak');
		$data['jumlah_ak']= $this->input->post('txt_jumlahak');
		$data['lampiran']= $this->input->post('txt_lamp');

		$result = $this->pengabdian_model->addKegiatan($data);
		redirect('dosen/Menudupak');
	}
	public function getKegiatan($kegiatan)
	{
		$data['pengabdian']=$this->pengabdian_model->getKegiatan($kegiatan)->row();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pengabdian',$data);
		$this->load->view('atribut/footer');
	}
	public function addKegiatan_p()
	{
		$kegiatan_p = $this->input->post('txt_judul');
		$data['id_dosen'] = $this->session->userdata('id');
		$data['unsur'] = $this->input->post('cb_unsur');
		$data['sub'] = $this->input->post('cb_detail');
		$data['uraian'] = $this->input->post('cb_uraian');
		$data['kegiatan'] = $this->input->post('txt_keg');
		$data['tingkat']= $this->input->post('txt_tingkat');
		$data['tempat'] = $this->input->post('txt_tempat');
		$data['tanggal']= $this->input->post('txt_tgl');
		$data['satuan_hasil'] = $this->input->post('txt_satuan');
		$data['jumlah_volume'] = $this->input->post('txt_jumlahv');
		$data['angka_kredit'] = $this->input->post('txt_ak');
		$data['jumlah_ak']= $this->input->post('txt_jumlahak');
		$data['lampiran']= $this->input->post('txt_lamp');

		$result = $this->penunjang_model->addKegiatan_p($data);
		redirect('dosen/Menudupak');
	}
	public function getKegiatan_p($kegiatan_p)
	{
		$data['penunjang']=$this->penunjang_model->getKegiatan_p($kegiatan_p)->row();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_penunjang',$data);
		$this->load->view('atribut/footer');
	}

	//PENGAMBILAN UNSUR//
	
	function  get_unsur(){
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

			if ($modul == "unsur"){
				echo $this->model_dosen->get_unsur($id);
			}else if($modul == "sub"){
				echo $this->model_dosen->get_sub($id);
			}else{
				echo $this->model_dosen->get_uraian($id);
			}
	}

	function  get_unsur_penelitian(){
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

			if ($modul == "unsur_penelitian"){
				echo $this->model_dosen->get_unsur_penelitian($id);
			}else{
				echo $this->model_dosen->get_uraian_penelitian($id);
			}

	}

	function  get_unsur_pengabdian(){
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

			if ($modul == "unsur_pengabdian"){
				echo $this->model_dosen->get_unsur_pengabdian($id);
			}else{
				echo $this->model_dosen->get_uraian_pengabdian($id);
			}
	}
	function  get_unsur_pendidikan(){
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

			if ($modul == "unsur_pendidikan"){
				echo $this->model_dosen->get_unsur_pendidikan($id);
			}else if($modul == "sub_pendidikan"){
				echo $this->model_dosen->get_sub_pendidikan($id);
			}else{
				echo $this->model_dosen->get_uraian_pendidikan($id);
			}
	}
	function  get_unsur_penunjang(){
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

			if ($modul == "unsur_penunjang"){
				echo $this->model_dosen->get_unsur_penunjang($id);
			}else{
				echo $this->model_dosen->get_uraian_penunjang($id);
			}

	}

}

	


