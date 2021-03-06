<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Landing
	 *	- or -
	 * 		http://example.com/index.php/Landing/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form'); 

		$this->load->model('landing_model'); 
	}

	public function index()
	{
		$data['popular_movies'] = $this->landing_model->popular_movies(); 
		$data['recently_added'] = $this->landing_model->recently_added(); 
		$this->load->view('landing_view', $data);
	}

}


