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
		$this->load->model('filter_model');
		$this->load->model('admin_model/add_movie_model'); 
	}

	public function index()
	{

		$data['movies'] = $this->browse_model->all_movies();
		$data['genre'] = $this->add_movie_model->getGenre(); 

		$this->load->view('browse_view', $data);
	}

	public function filter_movies()
	{
		$data['budget_one'] = $this->input->post('budget_one', TRUE); 
		$data['budget_two'] = $this->input->post('budget_two', TRUE); 
		$data['year_one'] = $this->input->post('year_one', TRUE); 
		$data['year_two'] = $this->input->post('year_two', TRUE); 
		$data['revenue_one'] = $this->input->post('revenue_one', TRUE); 
		$data['revenue_two'] = $this->input->post('revenue_two', TRUE); 
		$data['runtime_one'] = $this->input->post('runtime_one', TRUE); 
		$data['runtime_two'] = $this->input->post('runtime_two', TRUE); 

		$data['movies'] = $this->filter_model->filter($data);
		$data['genre'] = $this->add_movie_model->getGenre(); 

		$this->load->view('browse_view', $data);

	}

}



