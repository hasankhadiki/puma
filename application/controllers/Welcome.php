<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
        $this->load->helper(array('form','url'));
	}

	public function index(){
		$this->load->helper('form');
       	$data = $this->m_barang->tampilkan();
		$this->load->view('v_home', array('data' => $data));
	}
}
