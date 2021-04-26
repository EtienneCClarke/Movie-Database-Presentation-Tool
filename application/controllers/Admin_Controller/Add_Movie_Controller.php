<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Add_Movie_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/admin
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form'); 

		$this->load->model('admin_model/add_movie_model'); 
	}
	
	public function index()
	{
		$data['genreMessage'] = "";
		$data['actorMessage'] = "";
		$data['directorMessage'] = "";
		$data['releaseYearMessage'] = "";
		$data['movieMessage'] = "";
		$data['genreMessageDeletion'] = "";
		$data['actorMessageDeletion'] = "";
		$data['directorMessageDeletion'] = "";
		$data['releaseYearMessageDeletion'] = "";
		$data['movieMessageDeletion'] = "";
		$data['genre'] = $this->add_movie_model->getGenre(); 
		$data['actor'] = $this->add_movie_model->getActor(); 
		$data['director'] = $this->add_movie_model->getDirector(); 
		$data['year'] = $this->add_movie_model->getYearReleased(); 
		$data['movie'] = $this->add_movie_model->getMovie(); 
		$this->load->view('navigation');
		$this->load->view('admin_view/add_movie', $data);
		$this->load->view('footer');
	}

	public function add_genre()
	{
		$genre = $this->input->post('genre', TRUE); 
		$genreExists = $this->add_movie_model->addGenre($genre);

		if($genreExists)
		{
			$data['genreMessage'] = "Genre already exists";
        }else{
            $data['genreMessage'] = "Genre added";
        } 
			$data['actorMessage'] = "";
			$data['directorMessage'] = "";
			$data['releaseYearMessage'] = "";
			$data['movieMessage'] = "";
			$data['genreMessageDeletion'] = "";
			$data['actorMessageDeletion'] = "";
			$data['directorMessageDeletion'] = "";
			$data['releaseYearMessageDeletion'] = "";
			$data['movieMessageDeletion'] = "";
			$data['genre'] = $this->add_movie_model->getGenre(); 
			$data['actor'] = $this->add_movie_model->getActor(); 
			$data['director'] = $this->add_movie_model->getDirector(); 
			$data['year'] = $this->add_movie_model->getYearReleased(); 
			$data['movie'] = $this->add_movie_model->getMovie(); 
			$this->load->view('navigation');
			$this->load->view('admin_view/add_movie', $data);
			$this->load->view('footer');
	}

	public function add_actor()
	{
		$firstname = $this->input->post('actorFirstname', TRUE); 
		$lastname = $this->input->post('actorLastname', TRUE); 
		$actorImage = "public/images/Actors/".$this->input->post('actorImage', TRUE);

		$actorExists = $this->add_movie_model->addActor($firstname, $lastname, $actorImage);
		if($actorExists)
		{
			$data['actorMessage'] = "Actor already exists";
        }else{
            $data['actorMessage'] = "Actor added";
        } 
			$data['genreMessage'] = "";
			$data['directorMessage'] = "";
			$data['releaseYearMessage'] = "";
			$data['movieMessage'] = "";
			$data['genreMessageDeletion'] = "";
			$data['actorMessageDeletion'] = "";
			$data['directorMessageDeletion'] = "";
			$data['releaseYearMessageDeletion'] = "";
			$data['movieMessageDeletion'] = "";
			$data['genre'] = $this->add_movie_model->getGenre(); 
			$data['actor'] = $this->add_movie_model->getActor(); 
			$data['director'] = $this->add_movie_model->getDirector(); 
			$data['year'] = $this->add_movie_model->getYearReleased(); 
			$data['movie'] = $this->add_movie_model->getMovie(); 
			$this->load->view('navigation');
			$this->load->view('admin_view/add_movie', $data);
			$this->load->view('footer');
	}

	public function add_director()
	{
		$firstname = $this->input->post('directorFirstname', TRUE); 
		$lastname = $this->input->post('directorLastname', TRUE); 
		$directorImage = "public/images/Directors/".$this->input->post('directorImage', TRUE);

		$directorExists = $this->add_movie_model->addDirector($firstname, $lastname, $directorImage);
		if($directorExists)
		{
			$data['directorMessage'] = "Director already exists";
        }else{
            $data['directorMessage'] = "Director added";
        } 
			$data['genreMessage'] = "";
			$data['actorMessage'] = "";
			$data['releaseYearMessage'] = "";
			$data['movieMessage'] = "";
			$data['genreMessageDeletion'] = "";
			$data['actorMessageDeletion'] = "";
			$data['directorMessageDeletion'] = "";
			$data['releaseYearMessageDeletion'] = "";
			$data['movieMessageDeletion'] = "";
			$data['genre'] = $this->add_movie_model->getGenre(); 
			$data['actor'] = $this->add_movie_model->getActor(); 
			$data['director'] = $this->add_movie_model->getDirector(); 
			$data['year'] = $this->add_movie_model->getYearReleased();  
			$data['movie'] = $this->add_movie_model->getMovie(); 
			$this->load->view('navigation');
			$this->load->view('admin_view/add_movie', $data);
			$this->load->view('footer');
	}

	public function add_year()
	{
		$year = $this->input->post('year', TRUE); 

		$yearExists = $this->add_movie_model->addYear($year);
		if($yearExists)
		{
			$data['releaseYearMessage'] = "Year already exists";
        }else{
            $data['releaseYearMessage'] = "Year added";
        } 
			$data['genreMessage'] = "";
			$data['actorMessage'] = "";
			$data['directorMessage'] = "";
			$data['movieMessage'] = "";
			$data['genreMessageDeletion'] = "";
			$data['actorMessageDeletion'] = "";
			$data['directorMessageDeletion'] = "";
			$data['releaseYearMessageDeletion'] = "";
			$data['movieMessageDeletion'] = "";
			$data['genre'] = $this->add_movie_model->getGenre(); 
			$data['actor'] = $this->add_movie_model->getActor(); 
			$data['director'] = $this->add_movie_model->getDirector(); 
			$data['year'] = $this->add_movie_model->getYearReleased(); 
			$data['movie'] = $this->add_movie_model->getMovie(); 
			$this->load->view('navigation');
			$this->load->view('admin_view/add_movie', $data);
			$this->load->view('footer');
	}

	public function add_movie()
	{
		$data['title'] = $this->input->post('title', TRUE); 
		$data['budget'] = $this->input->post('budget', TRUE); 
		$data['revenue'] = $this->input->post('revenue', TRUE); 
		$data['duration'] = $this->input->post('duration', TRUE); 
		$data['rating'] = $this->input->post('rating', TRUE); 
		$data['genreID'] = $this->input->post('genreID', TRUE); 
		$data['genreID2'] = $this->input->post('genreIDTwo', TRUE); 
		$data['directorID'] = $this->input->post('directorID', TRUE); 
		$data['directorID2'] = $this->input->post('directorID2', TRUE);
		$data['actorID'] = $this->input->post('actorID', TRUE); 
		$data['actorID2'] = $this->input->post('actorID2', TRUE);
		$data['actorID3'] = $this->input->post('actorID1', TRUE);
		$data['releasedID'] = $this->input->post('releaseID', TRUE); 
		$data['description'] = $this->input->post('description', TRUE); 
		$data['hyperlink'] = $this->input->post('hyperlink', TRUE);
		$data['movieImage'] = "public/images/Movie posters/".$this->input->post('movieImage', TRUE);  

		$titleExists = $this->add_movie_model->addMovie($data);
		if($titleExists)
		{
			$data['movieMessage'] = "Movie already exists";
        }else{
            $data['movieMessage'] = "Movie added";
        } 
			$data['genreMessage'] = "";
			$data['actorMessage'] = "";
			$data['directorMessage'] = "";
			$data['releaseYearMessage'] = "";
			$data['genreMessageDeletion'] = "";
			$data['actorMessageDeletion'] = "";
			$data['directorMessageDeletion'] = "";
			$data['releaseYearMessageDeletion'] = "";
			$data['movieMessageDeletion'] = "";
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
