<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
  * summary
  */
 class Pendidikan extends CI_Controller
 {
     /**
      * summary
      */
     public function __construct()
     {
         parent::__construct();
		$this->load->model('pendidikan_model');
		$this->load->model('unsur_model');
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
		$data['subUnsur']=$this->pendidikan_model->getUraian();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/tambah_pend',$data);
		$this->load->view('atribut/footer');
	}

	public function simpanPendidikan()
	{
		$uraian = $this->input->post('cb_uraian');
		$kredit = $this->pendidikan_model->getAngkaKredit($uraian);
		$angkaKredit = "";
		foreach ($kredit as $row) {
			$angkaKredit = $row['angka_kredit'];
		}

		$dosen = $this->session->userdata('id');
		$pendidikan = $this->input->post('subPendidikan');
		$tempat = $this->input->post('txt_tempat');
		$tanggal = $this->input->post('txt_tgl');
		$satuanhasil = $this->input->post('txt_satuan');
		$volume = $this->input->post('txt_jumlahv');
		$aKredit = $angkaKredit * $volume;
		
		$data['id_dosen'] = $dosen;
		$data['unsur'] = '1';
		$data['sub'] = $pendidikan;
		$data['uraian'] = $uraian;
		$data['tempat'] = $tempat;
		$data['tanggal'] = $tanggal;
		$data['satuan_hasil'] = $satuanhasil;
		$data['jumlah_volume'] = $volume;
		$data['jumlah_ak'] = $aKredit;

		$result = $this->pendidikan_model->addTempat($data);

		if ($result) {
			$this->session->set_flashdata('sukses', 'Data Berhasil di tambahkan');
			redirect('dosen/Pendidikan');
		}
	}

	public function editPendidikan($tempat)
	{
		$data['editpendidikan']=$this->pendidikan_model->ubahPendidikan($tempat)->row();
		$data['pendidikan']=$this->unsur_model->getUnsur();
		$data['subUnsur']=$this->pendidikan_model->get_pendidikan();
		$this->load->view('atribut/header');
		$this->load->view('dosen/menudupak/tambah/editPendidikan',$data);
		$this->load->view('atribut/footer');
	}

	public function getUraian()
	{
		$subkegiatan = $_GET['suburaian'];
		$uraian = $this->pendidikan_model->getsubUraian($subkegiatan);
		echo json_encode($uraian);
	}
 } ?>