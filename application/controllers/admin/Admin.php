<?php defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * summary
 */
class Admin extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$this->load->view('atribut/headeradmin');
    	$this->load->view('admin/main');
    	$this->load->view('atribut/footer');
    }
}
 ?>