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
	}

	public function index()
	{

		$data['movies'] = $this->browse_model->all_movies();
		$data['genres'] = $this->browse_model->all_genres();

		$this->load->view('browse_view', $data);
	}

}



