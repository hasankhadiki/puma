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

    function InsertData($tableName,$data){
    $res = $this->db->insert($tableName, $data);
    return $res;
  }

      function edit($data, $nama){
      $this->db->where('id_order',$nama);
      $this->db->update('invoice', $data);
      return TRUE;

  }

    public function getUser($where){
        $this->db->where('email', $where);
        return $this->db->get('user')->row();
    }

    public function getProfile($data){
        $data = $this->db->get('user '. $data);
        return $data->result_array();
    }

    public function update_profile($user, $data){
            $this->db->where('email', $user);
            return $this->db->update('user', $data);
     }

     public function update_profiletest($where, $data){
            $this->db->where($where);
            return $this->db->update('user', $data);
     }

    public function get_update($FirstName){
          //  $data = array('Uktp' => $Uktp, 'Uname' => $Uname, 'Uemail' => $Uemail, 'Uphone' => $Uphone, 'Uaddress' => $Uaddress);
            $this->db->where('FirstName', $FirstName);
            $this->db->where('LastName', $LastName);
            $this->db->where('email', $Email);
            
            $query = $this->db->get('user');
            return $query->num_rows();
        }

    public function masukkan($namatbl, $data){ //bikin akun
        $res = $this->db->insert($namatbl, $data);
        /*f (mysql_errno() == 1062) {
            print 'Please Insert Unique email';
        }*/
        return $res;
    }

     function ambil_data(){
    $data=$this->db->query('select * from invoice');
     return $data->result_array();
    }

    public function masukData($data){
      $res = $this->db->insert('user',$data);
      return $res;
    }

    public function cekUnik($user){
    $query = $this->db->select('*')
      ->from('user')
      ->where('email',$user)
      // ->limit(1)
      ->get();
      if ($query->num_rows() == 0) {
        return true;
      }else{
        return false;
      }
    }
}
