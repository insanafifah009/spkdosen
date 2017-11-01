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
	public function index()
	{
		$data['pendidikan']=$this->pendidikan_model->get_pendidikan();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/datapendidikan', $data);
		$this->load->view('atribut/footer');
	}

	public function tambahPendidikan()
	{
		$data['pendidikan']=$this->unsur_model->getUnsur();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pend',$data);
		$this->load->view('atribut/footer');
	}
	public function pengajaran()
	{
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/datapengajaran');
		$this->load->view('atribut/footer');
	}
	public function tambahPengajaran()
	{
		$data['pengajaran']=$this->model_dosen->get_pengajaran();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pengajaran',$data);
		$this->load->view('atribut/footer');
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
		$this->load->view('dosen/menudupak/tambah/tambah_penelitian', $data);
		$this->load->view('atribut/footer');
	}
	public function pengabdian()
	{
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/datapengabdian');
		$this->load->view('atribut/footer');
	}
	public function tambahPengabdian()
	{
		$data['pengabdian']=$this->model_dosen->get_pengabdian();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pengabdian',$data);
		$this->load->view('atribut/footer');
	}
	public function penunjang()
	{
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/datapenunjang');
		$this->load->view('atribut/footer');
	}
	public function tambahpenunjang()
	{
		$data['penunjang']=$this->model_dosen->get_penunjang();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_penunjang',$data);
		$this->load->view('atribut/footer');
	}

	// public function addNip()
	// {
	// 	$nip = $this->input->post('txt_nip');
	// 	$data['nip'] = $nip;
	// 	$result = $this->pendidikan_model->addNip($data);
	// 	redirect('dosen/Menudupak');
	// }
	// public function getNip($nip)
	// {
	// 	$data['pendidikan']=$this->pendidikan_model->getNip($nip)->row();
	// 	$this->load->view('atribut/header');
	// 	$this->load->view('dosen/menudupak/tambah/tambah_pend',$data);
	// 	$this->load->view('atribut/footer');
	// }
	public function addTempat()
	{
		$tempat = $this->input->post('txt_tempat');
		// $data['tempat'] = $tempat;
		$data['id_dosen'] = $this->session->userdata('id');
		$data['unsur'] = $this->input->post('cb_unsur');
		$data['sub'] = $this->input->post('cb_detail');
		$data['uraian'] = $this->input->post('cb_uraian');
		$data['tempat'] = $this->input->post('txt_tempat');
		$data['tanggal']= $this->input->post('txt_tgl');

		$result = $this->pendidikan_model->addTempat($data);
		redirect('dosen/Menudupak');
	}
	public function getTempat($tempat)
	{
		$data['pendidikan']=$this->pendidikan_model->getTempat($tempat)->row();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pend',$data);
		$this->load->view('atribut/footer');
	}
	public function addJudul()
	{
		$tempat = $this->input->post('txt_judul');
		$data['id_dosen'] = $this->session->userdata('id');
		$data['unsur'] = $this->input->post('cb_unsur');
		$data['sub'] = $this->input->post('cb_detail');
		$data['uraian'] = $this->input->post('cb_uraian');
		$data['judul'] = $this->input->post('txt_judul');
		$data['link']= $this->input->post('txt_link');

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
	
	function  get_unsur(){
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

			if ($modul == "unsur"){
				echo $this->model_dosen->get_unsur($id);
			}else{
				echo $this->model_dosen->get_uraian($id);
			}

	}

	function  get_unsur_penelitian(){
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

			if ($modul == "unsur"){
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

	


