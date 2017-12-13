<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct(){

		parent::__construct();
		$this->load->model('user');

	}

	function index(){
            $data['err_message'] = "";
            if($this->session->userdata('status') != "login"){
                $this->load->view('dm_user/login', $data);
            }else{
            //echo "YOU'RE ALREADY LOGGED IN";
                redirect("dm_user/home");
            }
    }

public function forgot(){
  $email = $this->input->post('email');
}

public function change(){
  $password = $this->input->post('password');
  $repassword = $this->input->post('password');
}


}
