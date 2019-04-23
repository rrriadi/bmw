<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();


	}

	public function index()
	{
		$this->load->view('home.php');
	}

	public function register() 
	{
		$this->load->view("register");
	}

	public function login() 
	{
		$this->load->view("login");
	}

	public function msed()
	{
		$this->load->view("msed");
	}
}
