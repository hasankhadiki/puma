<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dm_admin extends CI_Controller {

    function __construct(){

		parent::__construct();
		$this->load->model('m_barang');

	}

    public function index(){
        $this->load->view('admin/v_admin_banner');
		$this->load->view('admin/v_admin_index');
	}

	public function layout(){
		$data = $this->m_barang->ambil_data();
        
		$this->load->view('admin/v_admin_layout', array('data' => $data));
	}

	public function insert(){

		// $id_barang = $_POST['id_barang'];
		$nama_barang = $_POST['nama_barang'];
		$merk_barang = $_POST['merk_barang'];
		$harga_barang =  $_POST['harga_barang'];
        //$jumlah_barang =  $_POST['jumlah_barang'];
        $deskripsi_barang =  $_POST['deskripsi_barang'];


        $config['upload_path']         = './assets/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1920;

        $this->load->library('upload', $config);

        $file1=('assets/img/'.$_FILES['file1']['name']);

        $data_insert = array('nama_barang' => $nama_barang , 'merk_barang' => $merk_barang, 'harga_barang' =>$harga_barang, 'deskripsi_barang'=>$deskripsi_barang, 'image'=>$file1);
                // $data_insert = array('id_barang'=>$id_barang, 'merk_barang' => $merk_barang, 'nama_barang' => $nama_barang , 'harga_barang' =>$harga_barang, 'deskripsi_barang'=>$deskripsi_barang, 'image'=>$file1);
        $res = $this->m_barang->InsertData('barang',$data_insert);

		if ( ! $this->upload->do_upload('file1')){
		 $poi=$this->upload->display_errors();
			echo $poi;
		}else{
			 if($res>=1){
					redirect('index.php/dm_admin/layout');
				}
		}

  }

  function ubah(){
    $nama_barang = $_POST['nama_barang'];
    $merk_barang = $_POST['merk_barang'];
    $harga_barang =  $_POST['harga_barang'];
        //$jumlah_barang =  $_POST['jumlah_barang'];
        $deskripsi_barang =  $_POST['deskripsi_barang'];


        $config['upload_path']         = './assets/img';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 1000000;
    $config['max_width']            = 1920;
    $config['max_height']           = 1920;

        $this->load->library('upload', $config);

        $file1=('assets/img/'.$_FILES['file1']['name']);

        $data = array('nama_barang' => $nama_barang , 'merk_barang' => $merk_barang, 'harga_barang' =>$harga_barang, 'deskripsi_barang'=>$deskripsi_barang, 'image'=>$file1);

        $this->m_barang->edit($data,$nama_barang);
        redirect('index.php/dm_admin/layout');
    }

    public function hapus($idBarang){

            $this->m_barang->delete($idBarang);

            redirect('index.php/dm_admin/layout');
    	}


}
