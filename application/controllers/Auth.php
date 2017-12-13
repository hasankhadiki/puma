<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    function __construct(){

		parent::__construct();
		$this->load->model('user');
    $this->load->helper('form');
    $this->load->view('header');
    $this->load->view('v_login');
    $this->load->view('footer');

	}

    public function do_signup(){

    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $email = $_POST['EmailAddress'];
    $password = $_POST['Password'];
    $enpassword = sha1(md5($password));
    $confpassword =$_POST['ConfirmPassword'];
    $enconfpassword = sha1(md5($confpassword));
    $data_insert = array(
      'FirstName' => $firstname,
      'LastName' => $lastname,
      'EmailAddress' => $email,
      'Password' => $enpassword,//sandi sudah di enkrip
      'ConfirmPassword' => $enconfpassword,
      'level' => "user"
      );
    $confpwd1 = $this->input->post('Password');
    $confpwd2 = $this->input->post('ConfirmPassword');
    if($confpwd1 == $confpwd2){ 
      $res = $this->user->masukData($data_insert);
      $this->load->view('v_register');
        }
    else{
        echo 'password tidak sesuai';
    }
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
  $cek = $this->user->cekData($email);
  if($cek==true){
    redirect("dm_userchange");
  }
  else{
    echo "Email yang anda masukkan tidak ditemukan";
  }

}

public function change(){
  $password = $this->input->post('password');
  $repassword = $this->input->post('password');
}


}
