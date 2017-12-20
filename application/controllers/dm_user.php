<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dm_user extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
    $this->load->model('user');
        $this->load->helper(array('form','url'));
        $this->load->library('cart');
        $this->load->model('user');
	}

	/*public function index(){
		$this->load->view('v_login');
	}*/

  function tambahq($rowid){
    $q = $items['qty'] + 1;
    $vars = array('rowid' => $rowid, 'qty' => $q );
    var_dump($this->cart->update($vars));
    $this->load->view('header');
    $this->load->view('v_checkout');
    $this->load->view('footer');

  }

  function updatecart($rowid){
    $row_id = $rowid;
    $qty = $this->input->post('qty');
    $data = array(
        'rowid'   => $rowid,
        'qty'     => $qty
    );
    $this->cart->update($data);
    $this->load->view('header');
    $this->load->view('v_checkout');
    $this->load->view('footer');
  }

  function kurangq($rowid){
    $q = $items['qty'] - 1;
    $vars = array('rowid' => $rowid, 'qty' => $q );
    var_dump($this->cart->update($vars));
    $this->load->view('header');
    $this->load->view('v_checkout');
    $this->load->view('footer');
  }

  function email(){
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.gmail.com',
      'smtp_user' => 'jannaher98@gmail.com',
      'smtp_pass' => 'secret05!',
      );
    $email = $this->input->post('email');
    $this->load->library('email', $config);
    $this->email->to('$email');
    $this->email->from('jannaher98@gmail.com','Admin');
    $this->email->subject('Forgot Password');
    $this->email->message('your new password is 12345678');
    $this->email->set_newline("\r\n");
  }

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

	public function mail(){
    $this->load->view('header');
		$this->load->view('v_mail');
		$this->load->view('footer');
	}

  public function shortcodes(){
    $this->load->view('header');
    $this->load->view('v_short-codes');
    $this->load->view('footer');
  }

	public function checkout(){
    $this->load->view('header');
		$this->load->view('v_checkout');
		$this->load->view('footer');
	}

  public function forgot(){
		$this->load->helper('form');
       	$this->load->view('header');
		$this->load->view('v_forgot');
		$this->load->view('footer');
	}



  public function change(){
		$this->load->helper('form');
       	$this->load->view('header');
		$this->load->view('v_change');
		$this->load->view('footer');
	}
	// public function view($page = 'v_home')
 //    {
 //    	$data['title'] = ucfirst($page);
 //    	$this->load->view('header');
 //    	$this->load->view($page, $data);
 //    	$this->load->view('footer');
 //    }

	public function add_cart($id_barang){
        $product = $this->m_barang->get_barang($id_barang);
        $data = array(
                       'id'      => $product->id_barang,
                       'name'    => $product->nama_barang,
                       'qty'     => 1,
                       'price'   => $product->harga_barang
                    );
        $this->cart->insert($data);
        //echo $data;
        redirect(base_url()."dm_user/products");
    }

    public function clear_cart(){
        $this->cart->destroy();
        redirect(site_url()."/dm_user/checkout");
    }

    public function clear_cart_id($id){
        $this->cart->remove($id);
        redirect(site_url()."/dm_user/checkout");
    }

    public function invoice($no){
    $data = $this->user->ambil_data();
    $this->load->view('header');
    $this->load->view('v_upload_bukti', array('data' => $data), $no);
    $this->load->view('footer');
    }

  public function insert(){

    $id_order = $_POST['id_order'];

    $config['upload_path']         = './assets/img/bukti/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 1000000;
    $config['max_width']            = 1920;
    $config['max_height']           = 1920;

        $this->load->library('upload', $config);

        $file1=('assets/img/bukti/'.$_FILES['file1']['name']);

        $data_insert = array('id_order' => $id_order , 'image'=>$file1);
                // $data_insert = array('id_barang'=>$id_barang, 'merk_barang' => $merk_barang, 'nama_barang' => $nama_barang , 'harga_barang' =>$harga_barang, 'deskripsi_barang'=>$deskripsi_barang, 'image'=>$file1);
        $res = $this->user->edit($data_insert,$id_order);
    if ( ! $this->upload->do_upload('file1')){
     $poi=$this->upload->display_errors();
      echo $poi;
    }elseif ($res>=1){
        $this->cart->destroy();
          redirect('');
        }
    }

    public function do_checkout(){
       if($this->session->userdata('logged_in') != TRUE ){
        $this->session->set_flashdata('error', 'Maaf, anda belum login');
                $this->load->view('header');
                $this->load->view('v_login');
                $this->load->view('footer');
               
            }else{
        $total_row = $this->m_barang->getNumRow('invoice');

        $id_order = $total_row;
         $nama = $_POST['nama'];
         $email = $_POST['email'];
         $no_telp = $_POST['no_telp'];
         $alamat = $_POST['alamat'];
         $total = $_POST['total'];
         $status = 'unpaid';

         $data_insert = array(
         	'id_order' => $id_order,
            'email' => $email,
            'nama' => $nama,
            'no_telp' => $no_telp,
            'alamat' => $alamat,
            'total' => $total,
            'status' => $status
            );
        $res = $this->m_barang->InsertData('invoice', $data_insert);
        if($res>=1){
            redirect(base_url()."dm_user/invoice/".$id_order);
            exit();
        }else{
            echo "<h2>Order gagal</h2>";
        }
      }
        
    }

    public function viewProfile(){
            if($this->session->userdata('logged_in') != TRUE ){
                $this->session->set_flashdata('error', 'Maaf, anda belum login');
                $this->load->view('header');
                $this->load->view('v_login');
                $this->load->view('footer');
               
            }else{
                $session = (string)($this->session->userdata('email'));
                $Email = $session;
                $profil = $this->user->getProfile("where email = '$session'");
                $data = array(
                        "FirstName" => $profil[0]['FirstName'],
                        "LastName" => $profil[0]['LastName'],
                        "Email" => $profil[0]['email'],
                        
                );
                $this->load->view('header');
                $this->load->view('v_viewprofile', $data);
                
            }
        }

      public function updateProfile(){
            $this->form_validation->set_rules('FirstName', 'FirstName', 'required');
            $this->form_validation->set_rules('LastName', 'LastName', 'required');
            $this->form_validation->set_rules('Email', 'Email', 'required');
                       //$session = (string)($this->session->userdata('Uname'));
            $Username = $this->session->userdata('nama');
            $session = (string)($this->session->userdata('nama'));
            $user = $session;
            
            $this->load->helper('security');
            $FirstName = $this->input->post('FirstName', true);
            $LastName  = $this->input->post('LastName', true);
            $Email = $this->input->post('Email', true);
           
            $data =array(
                'FirstName' => $FirstName,
                'LastName' => $LastName,
                'Email' => $Email
                
                );
            $email = $_POST['Email'];

            $where = "email = "."'".$email."'";
                      
            $this->user->update_profiletest($where, $data);
            redirect('dm_user/viewProfile'); }


	// public function view($page = 'v_home')
 //    {
 //    	$data['title'] = ucfirst($page);
 //    	$this->load->view('header');
 //    	$this->load->view($page, $data);
 //    	$this->load->view('footer');
 //    }
}
