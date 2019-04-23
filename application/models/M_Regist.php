<?php

Class M_Regist extends CI_Model
{

	public function register()
	{
		$data = 
		[
			"email" = $this->input->post('email', true);
			"firstname" = $this->input->post('firstname', true);
			"lastname" = $this->input->post('lastname', true);
			"password" = $this->input->post('password', true);
			"address" = $this->input->post('address', true);
		];

		$this->db->insert('user', $data);

		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}