<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dm_user extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_barang');
        $this->load->helper(array('form','url'));
	}

	/*public function index(){
		$this->load->view('v_login');
	}*/

	public function products(){
		$this->load->helper('form');
       	$data = $this->m_barang->tampilkan();
       	$this->load->view('header');
		$this->load->view('v_products', array('data' => $data));
		$this->load->view('footer');
	}

	public function home(){
		$this->load->helper('form');
       	$data = $this->m_barang->tampilkan();
       	$this->load->view('header');
		$this->load->view('v_home', array('data' => $data));
		$this->load->view('footer');
	}

	public function login(){
		$this->load->helper('form');
       	$this->load->view('header');
		$this->load->view('v_login');
		$this->load->view('footer');
	}

	public function mail(){
       	$this->load->view('header');
		$this->load->view('v_mail');
		$this->load->view('footer');
	}

	public function checkout(){
       	$this->load->view('header');
		$this->load->view('v_checkout');
		$this->load->view('footer');
	}
	// public function view($page = 'v_home')
 //    {
 //    	$data['title'] = ucfirst($page);
 //    	$this->load->view('header');
 //    	$this->load->view($page, $data);
 //    	$this->load->view('footer');
 //    }
}