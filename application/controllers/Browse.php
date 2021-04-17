<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Browse
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->model('browse_model');
		$this->load->model('admin_model/add_movie_model'); 
	}

	public function index()
	{

		$data['movies'] = $this->browse_model->all_movies();
		$data['genre'] = $this->add_movie_model->getGenre(); 

		$this->load->view('browse_view', $data);
	}

}



