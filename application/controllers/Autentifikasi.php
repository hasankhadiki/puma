<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentifikasi extends CI_Controller {

    function __construct(){

		parent::__construct();
		$this->load->model('admin');

	}

	function index(){
            $data['err_message'] = "";
            if($this->session->userdata('status') != "login"){
                $this->load->view('admin/v_admin_signin', $data);
            }else{ 
            //echo "YOU'RE ALREADY LOGGED IN";
                redirect("dm_admin");
            }
    }

function login(){
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$where = array(
		'email' => $email,
		'password' => $password
		);
	$cek = $this->admin->cek_login('admin',$where);
	if($cek->num_rows()==0){
		$data_session = array(
		'nama' => $email,
		'status' =>"login"
		);
		$this->session->set_userdata($data_session);
		redirect("dm_admin");
	}else{
		echo "gagal";
	}

}

function logout(){
	$this->session->unset_userdata('nama');
    $this->session->unset_userdata('status');
	$this->session->sess_destroy();
	redirect(base_url('Autentifikasi'));
}
}