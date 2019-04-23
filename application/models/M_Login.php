<?php

class M_Login extends CI_Model
{
  public function login($email, $password){
    $this->db->where('email',$email);
    $this->db->where('password',$password);

    $result = $this->db->get('user');
    if($result->num_rows()==1){
        return $result->row(0);
    }else{
        return false;
    }
  }

  public function register_user($table,$data){
    $insert = $this->db->insert($table, $data);
    if ($insert){
      return TRUE;
    }else{
      return FALSE;
    }
  }
}