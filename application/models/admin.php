<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Model{

    function __construct(){
	parent::__construct();
	}

	function cek_login($table,$where){
 	return $this->db->get_where($table,$where);
 	}

	function ambil_data($tabel){
		$hasil = $this->db->get($tabel);

    	if($hasil->num_rows() > 0){
    		return $hasil->result();
    	} else{
    		return array();
    	}
    }



 	function update_status($id, $status){
 		$this->db->where('id_order', $id)
 				 ->set('status', $status)
        		 ->update('invoice');
 	}
 
}
