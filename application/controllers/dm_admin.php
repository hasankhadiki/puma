<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dm_admin extends CI_Controller {

    public function index(){

		$this->load->view('admin/v_admin_index');	
	}

	    public function layout(){

		$this->load->view('admin/v_admin_layout');	
	}
}
