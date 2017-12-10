<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dm_user extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
        $this->load->helper(array('form','url'));
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function products(){
		$this->load->helper('form');
       	$data = $this->m_barang->tampilkan();
		$this->load->view('v_products', array('data' => $data));
	}

	public function home(){
		$this->load->helper('form');
       	$data = $this->m_barang->tampilkan();
		$this->load->view('v_home', array('data' => $data));
	}

	// public function view($page = 'v_home')
 //    {
 //    	$data['title'] = ucfirst($page);
 //    	$this->load->view('header');
 //    	$this->load->view($page, $data);
 //    	$this->load->view('footer');
 //    }
}
