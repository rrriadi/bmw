<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();

    $this->load->model('M_Login');
    $this->load->model('M_Regist');
    $this->load->model('M_Service');


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

  public function loginform()
    {
        $email = $this->input->post("email");
        $password = $this->input->post('password');
    $checking = $this->user->login(array('email' => $email), array('password' => $password));

    if ($checking != FALSE) {
      $this->load->view('content/home');
            
        } else 
        {
            $data['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                  <strong>Error!</strong><br>
                                  Your username or password is invalid!
                </div>';
        }
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

  	public function registerprocess()
    {
       $data = 
       [
        'address' => $this->input->post('address'),
        'email' => $this->input->post('email'),
        'firstname' => $this->input->post('firstname'),
        'lastname' => $this->input->post('lastname'),
        'password' => $this->input->post('password'),
       ];
       $this->user->insert($data);
       redirect('login');

       }

  public function Logout()
  {
    $this->session->sess_destroy();
    redirect('home');
  }
}

