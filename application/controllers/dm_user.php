<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dm_user extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}

	public function products()
	{
		$this->load->view('v_products');
	}

	public function home()
	{
		$this->load->view('v_home');
	}

	// public function view($page = 'v_home')
 //    {
 //    	$data['title'] = ucfirst($page);
 //    	$this->load->view('header');
 //    	$this->load->view($page, $data);
 //    	$this->load->view('footer');
 //    }
}
