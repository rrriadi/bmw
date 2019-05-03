<?php

class M_Login extends CI_Model
{
  $this->db->where($email);
        $this->db->where($password);
    $this->db->select('*');
    $query = $this->db->get('user');
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            $loginData = $query->result();
            foreach ($loginData as $data) {
                $session_data = array(
                    'email' => $data->email,
                    'password' => $data->password
                );
                $this->session->set_userdata($session_data);
            }
            return TRUE;
        }
  }

  function register($data)
    {
        return $this->db->insert('user', $data);
    }
}