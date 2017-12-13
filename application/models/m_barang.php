<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_barang extends CI_Model{

    function __construct(){
		parent::__construct();

	}

	 function tambahBarang($table, $data){
		$this->db->insert($table, $data);

	}

	function ambil_data(){
		$data=$this->db->query('select * from barang');
	   return $data->result_array();
    }

    function tampilkan(){
        $data=$this->db->query('SELECT * FROM (SELECT * FROM barang ORDER BY id_barang DESC LIMIT 3) as r ORDER BY id_barang');
	   return $data->result_array();
    }

     function cek_data($id){
         $data=$this->db->query('select * from barang where id_barang='.$id);
		return $data->result_array();
	}

    function InsertData($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	}

	 function decrement(){
    	$res=$this->db->query('ALTER TABLE barang AUTO_INCREMENT = 1');
        return $res;
  }

    function delete($nama){

          $this->db->where('nama_barang', $nama);
          $this->db->delete('barang');
  }



    function edit($data, $nama){
      $this->db->where('nama_barang',$nama);
      $this->db->update('barang', $data);
      return TRUE;

  }

  //ambil data barang berdasarkan id_barang untuk dimasukin ke cart
  function get_barang($id){
    $hasil = $this->db->where('id_barang', $id)
                          ->limit(1)
                          ->get('barang');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
  }
}
