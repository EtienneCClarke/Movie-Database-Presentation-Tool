<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete_Row_Controller extends CI_Controller {

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

		$this->load->model('admin_model/delete_record_model'); 
		$this->load->model('admin_model/add_movie_model'); 
	}

	public function deleteGenre()
	{
		$genre = $this->input->post('genre', TRUE);
		$this->delete_record_model->deleteGenre($genre); 

        $data['genreMessageDeletion'] = "Genre '$genre' deleted";
		$data['actorMessageDeletion'] = "";
		$data['directorMessageDeletion'] = "";
		$data['releaseYearMessageDeletion'] = "";
		$data['movieMessageDeletion'] = "";
		$data['genreMessage'] = "";
		$data['actorMessage'] = "";
		$data['directorMessage'] = "";
		$data['releaseYearMessage'] = "";
		$data['movieMessage'] = "";
		$data['genre'] = $this->add_movie_model->getGenre(); 
		$data['actor'] = $this->add_movie_model->getActor(); 
		$data['actorLastname'] = $this->add_movie_model->getActorLastname();
		$data['director'] = $this->add_movie_model->getDirector(); 
		$data['year'] = $this->add_movie_model->getYearReleased(); 
		$data['movie'] = $this->add_movie_model->getMovie(); 
		$this->load->view('navigation');
		$this->load->view('admin_view/add_movie', $data);
	}

    public function deleteActor()
	{
		$firstname = $this->input->post('genre', TRUE);
		$lastname = $this->input->post('genre', TRUE);
		$actorExists = $this->delete_record_model->deleteActor($firstname, $lastname); 

		if($actorExists)
		{
			$data['actorMessageDeletion'] = "Actor '$firstname $lastname' deleted";
		}else{
			$data['actorMessageDeletion'] = "Actor '$firstname $lastname' does not exist";
		}
        $data['genreMessageDeletion'] = "";
		$data['directorMessageDeletion'] = "";
		$data['releaseYearMessageDeletion'] = "";
		$data['movieMessageDeletion'] = "";
		$data['genreMessage'] = "";
		$data['directorMessage'] = "";
		$data['releaseYearMessage'] = "";
		$data['movieMessage'] = "";
		$data['genre'] = $this->add_movie_model->getGenre(); 
		$data['actor'] = $this->add_movie_model->getActor(); 
		$data['actorLastname'] = $this->add_movie_model->getActorLastname();
		$data['director'] = $this->add_movie_model->getDirector(); 
		$data['year'] = $this->add_movie_model->getYearReleased(); 
		$data['movie'] = $this->add_movie_model->getMovie(); 
		$this->load->view('navigation');
		$this->load->view('admin_view/add_movie', $data);
	}

    public function deleteDirector($id)
	{
		$this->delete_record_model->deleteDirector($id); 
        redirect('admin'); 
	}

    public function deleteYear($id)
	{
		$this->delete_record_model->deleteYear($id); 
        redirect('admin'); 
	}

    public function deleteMovie($id)
	{
		$this->delete_record_model->deleteMovie($id); 
        redirect('admin'); 
	}
}
