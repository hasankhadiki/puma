<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dm_user extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
        $this->load->helper(array('form','url'));
        $this->load->library('cart');
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
    	echo "check out berhasil ".$no ;
    	echo " DISINI TARUH VIEW UPLOAD BUKTI PEMBAYARAN";
    }

    public function do_checkout(){
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
	// public function view($page = 'v_home')
 //    {
 //    	$data['title'] = ucfirst($page);
 //    	$this->load->view('header');
 //    	$this->load->view($page, $data);
 //    	$this->load->view('footer');
 //    }
}
