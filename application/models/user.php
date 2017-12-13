<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model{

  function __construct(){
	parent::__construct();
	}

  public function cekData($user){
    $query = $this->db->select('*')
      ->from('user')
      ->where('email',$user)
      // ->limit(1)
      ->get();
    if ($query->num_rows() == 1) {
      return true;
    }else{
      return false;
    }
  }

    public function masukkan($namatbl, $data){ //bikin akun
        $res = $this->db->insert($namatbl, $data);
        /*f (mysql_errno() == 1062) {
            print 'Please Insert Unique email';
        }*/
        return $res;
    }

    public function masukData($data){
      $res = $this->db->insert('user',$data);
      return $res;
    }

}
