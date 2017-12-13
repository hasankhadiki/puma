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

}
