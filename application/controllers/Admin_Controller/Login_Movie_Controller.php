<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_Movie_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->model('admin_model/login_movie_model');
	}

  public function index()
	{
    		$this->load->view('admin_view/login_movie');
	}

  public function get_login()
  {
    $username = $this->input->post('username', TRUE);
    $password = $this->input->post('password', TRUE);
    if ($username === 'AdminJSMP' && $password === 'Apple20'){
      redirect('admin');
    }else{
      redirect('login_movie');
    }
  }
}
