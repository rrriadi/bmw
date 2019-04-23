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

	public function cek_login()
	{
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $login = $this->M_Login->login($email, $password);

    if ($login) {
      $sess_data = array(
          'logged_in' => 1,
          'email' => $login->wmail
      );
      $this->session->set_userdata($sess_data);
      redirect('BelajarController/index');
    } else {
      echo "<script>alert('Gagal login: Cek email dan/atau password!');</script>";
      redirect('LoginController/index');
    	}
  	}

  	public function regist()
  {
    $this->load->model('M_Login');
    $address = $this->input->post('address');
    $password = $this->input->post('password');
    $email = $this->input->post('email');
    $firstname = $this->input->post('firstname');
    $lastname = $this->input->post('lastname');
    $table = 'user';

    $data_insert = array (
      'email' => $email,
      'firstname' => $firstname,
      'lastname' => $lastname,
      'password' => $password,
      'address' => $address,
    );

    $register = $this->M_Login->register_user($table, $data_insert);

    if ($register) {
      $this->session->set_flashdata('alert', 'registrasi_berhasil');
      redirect('home');
    }
  }

  public function Logout()
  {
    $this->session->sess_destroy();
    redirect('home');
  }
}

