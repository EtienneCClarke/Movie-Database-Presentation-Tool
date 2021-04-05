<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preview extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Preview
	 */

	public function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
		$this->load->helper('form'); 

		$this->load->model('movie_preview_model'); 
	}

	public function index()
	{
		$this->load->view('preview_view');
	}

    public function show_movie($movie_id)
	{
        $data['movie_details'] = $this->movie_preview_model->movie_details($movie_id);
		$this->load->view('preview_view', $data);
	}
}



