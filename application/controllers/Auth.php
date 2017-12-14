<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    function __construct(){

		parent::__construct();
		$this->load->model('user');
    $this->load->library('cart');
    // Load form helper library
    $this->load->helper('form');
    // Load form validation library
    $this->load->library('form_validation');
    // Load session library
    $this->load->library('session');


	}

  function login(){
      $data['err_message'] = "";
         if($this->session->userdata('status') != "login"){
            $this->load->view('header');
            $this->load->view('v_login', $data);
            $this->load->view('footer');
         }else{
         //echo "YOU'RE ALREADY LOGGED IN";
         redirect("dm_user/home");
      }
  }

  function register(){
    $this->load->helper('form');
    $this->load->view('header');
    $this->load->view('v_register');
    $this->load->view('footer');
  }

    public function do_register(){
    $email = $_POST['email'];

    $tes = $this->user->cekUnik($email);


   if ($tes == true) {
      $firstname = $_POST['FirstName'];
      $lastname = $_POST['LastName'];
      $email = $_POST['email'];
      $password = $_POST['Password'];
      $enpassword = sha1(md5($password));
      $confpassword =$_POST['ConfirmPassword'];
      $enconfpassword = sha1(md5($confpassword));
      $data_insert = array(
        'FirstName' => $firstname,
        'LastName' => $lastname,
        'email' => $email,
        'Password' => $enpassword,//sandi sudah di enkrip
        //'ConfirmPassword' => $enconfpassword,
        'level' => "user"
        );
      //$confpwd1 = $this->input->post('Password');
      //$confpwd2 = $this->input->post('ConfirmPassword');
      if($enpassword == $enconfpassword){
        $res = $this->user->masukData($data_insert);
        $this->load->view('header');
        $this->load->view('v_login');
        $this->load->view('footer');
      }
      else{
        $this->session->set_flashdata('error', 'maaf, password anda tidak cocok');
        redirect('Auth/register');
      }
    }else{
      $this->session->set_flashdata('error', 'maaf, username atau password anda salah!');
      redirect('Auth/register');
    }
  }

  public function do_login(){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $enpassword = sha1(md5($password));

    $res = $this->user->getUser($email);
    $res = get_object_vars($res);
    //$cek = $this->Mymodel->login($email, $ensandi);
    $tes = $this->user->cekData($email);
    echo $tes;
    if($tes>0){
      $data = array(
        'nama' => $res['FirstName'],
        'email' => $res['email'],
        'level' => $res['level'],
        'logged_in' => TRUE
      );
      $level = $data['level'];


      $this->session->set_userdata($data);

      if($level == 'user'){
        redirect('dm_user/home');
      }elseif ($level == 'admin') {
        redirect('dm_admin');
      }
    }else{
      $this->session->set_flashdata('error', 'maaf, username atau password ada yang salah!');
      redirect('Auth/login');
    }
  }

  public function forgot(){
    $email = $this->input->post('email');
    $cek = $this->user->cekData($email);
    if($cek==true){
      $this->session->set_userdata('data_email_chg_pass', array('email'=>$email));
      redirect("dm_userchange/change");
    }
    else{
      echo "Email yang anda masukkan tidak ditemukan";
    }

  }

  public function logout(){
    $this->session->sess_destroy();
    $this->session->set_userdata(array('nama' => '', 'no_hp' => '', 'email' => '', 'is_logged_in' => ''));
    $this->load->view('header');
    $this->load->view('v_login');
    $this->load->view('footer');
  }

  public function change(){
    $password = $this->input->post('password');
    $email = $this->session->set_userdata('data_email_chg_pass')['email'];
    if(!empty($password)){
      $this->user->changePass($email, $password);
      redirect("dm_user/home");

    }
    
  }



}
