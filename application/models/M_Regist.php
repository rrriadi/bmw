<?php

Class M_Regist extends CI_Model
{

	public function register($data)
	{
		$this=>db->insert($data, 'user');
	}

}