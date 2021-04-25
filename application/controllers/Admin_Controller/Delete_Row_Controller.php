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

	// delete genre
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
		$data['director'] = $this->add_movie_model->getDirector(); 
		$data['year'] = $this->add_movie_model->getYearReleased(); 
		$data['movie'] = $this->add_movie_model->getMovie(); 
		$this->load->view('navigation');
		$this->load->view('admin_view/add_movie', $data);
		$this->load->view('footer');
	}

	// delete actor
    public function deleteActor()
	{
		$actorName = $this->input->post('actorName', TRUE);
		$this->delete_record_model->deleteActor($actorName); 

		$data['actorMessageDeletion'] = "Actor '$actorName' deleted";
        $data['genreMessageDeletion'] = "";
		$data['directorMessageDeletion'] = "";
		$data['releaseYearMessageDeletion'] = "";
		$data['movieMessageDeletion'] = "";
		$data['genreMessage'] = "";
		$data['directorMessage'] = "";
		$data['actorMessage'] = "";
		$data['releaseYearMessage'] = "";
		$data['movieMessage'] = "";
		$data['genre'] = $this->add_movie_model->getGenre(); 
		$data['actor'] = $this->add_movie_model->getActor(); 
		$data['director'] = $this->add_movie_model->getDirector(); 
		$data['year'] = $this->add_movie_model->getYearReleased(); 
		$data['movie'] = $this->add_movie_model->getMovie(); 
		$this->load->view('navigation');
		$this->load->view('admin_view/add_movie', $data);
		$this->load->view('footer');
	}

	// delete director
    public function deleteDirector()
	{
		$directorName = $this->input->post('directorName', TRUE);
		$this->delete_record_model->deleteDirector($directorName); 

		$data['directorMessageDeletion'] = "Director '$directorName' deleted";
		$data['actorMessageDeletion'] = "";
        $data['genreMessageDeletion'] = "";
		$data['releaseYearMessageDeletion'] = "";
		$data['movieMessageDeletion'] = "";
		$data['genreMessage'] = "";
		$data['directorMessage'] = "";
		$data['actorMessage'] = "";
		$data['releaseYearMessage'] = "";
		$data['movieMessage'] = "";
		$data['genre'] = $this->add_movie_model->getGenre(); 
		$data['actor'] = $this->add_movie_model->getActor(); 
		$data['director'] = $this->add_movie_model->getDirector(); 
		$data['year'] = $this->add_movie_model->getYearReleased(); 
		$data['movie'] = $this->add_movie_model->getMovie(); 
		$this->load->view('navigation');
		$this->load->view('admin_view/add_movie', $data);
		$this->load->view('footer');
	}

	// delete year
    public function deleteYear()
	{
		$year = $this->input->post('year', TRUE);
		$this->delete_record_model->deleteYear($year); 

		$data['releaseYearMessageDeletion'] = "Year '$year' deleted";
		$data['directorMessageDeletion'] = "";
		$data['actorMessageDeletion'] = "";
        $data['genreMessageDeletion'] = "";
		$data['movieMessageDeletion'] = "";
		$data['genreMessage'] = "";
		$data['directorMessage'] = "";
		$data['actorMessage'] = "";
		$data['releaseYearMessage'] = "";
		$data['movieMessage'] = "";
		$data['genre'] = $this->add_movie_model->getGenre(); 
		$data['actor'] = $this->add_movie_model->getActor(); 
		$data['director'] = $this->add_movie_model->getDirector(); 
		$data['year'] = $this->add_movie_model->getYearReleased(); 
		$data['movie'] = $this->add_movie_model->getMovie(); 
		$this->load->view('navigation');
		$this->load->view('admin_view/add_movie', $data);
		$this->load->view('footer');
	}

	// delete movie
    public function deleteMovie()
	{
		$movieName = $this->input->post('movieName', TRUE);
		$this->delete_record_model->deleteMovie($movieName); 

		$data['movieMessageDeletion'] = "Movie '$movieName' deleted";
		$data['releaseYearMessageDeletion'] = "";
		$data['directorMessageDeletion'] = "";
		$data['actorMessageDeletion'] = "";
        $data['genreMessageDeletion'] = "";
		$data['genreMessage'] = "";
		$data['directorMessage'] = "";
		$data['actorMessage'] = "";
		$data['releaseYearMessage'] = "";
		$data['movieMessage'] = "";
		$data['genre'] = $this->add_movie_model->getGenre(); 
		$data['actor'] = $this->add_movie_model->getActor(); 
		$data['director'] = $this->add_movie_model->getDirector(); 
		$data['year'] = $this->add_movie_model->getYearReleased(); 
		$data['movie'] = $this->add_movie_model->getMovie(); 
		$this->load->view('navigation');
		$this->load->view('admin_view/add_movie', $data);
		$this->load->view('footer'); 
	}
}
