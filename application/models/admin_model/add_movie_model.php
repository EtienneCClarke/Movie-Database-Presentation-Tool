<?php
class add_movie_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    /*
    query select to get all genre from the 'genre' table
    */
    public function getGenre()
    {
        $query = $this->db->query("SELECT * FROM genre ORDER BY genre ASC"); 
        return $query->result(); 
    }

    /*
    query select to get all actors from the 'actor' table
    */
    public function getActor()
    {
        $query = $this->db->query("SELECT * FROM actor ORDER BY firstname ASC"); 
        return $query->result(); 
    }

    /*
    query select to get all directors from the 'director' table
    */
    public function getDirector()
    {
        $query = $this->db->query("SELECT * FROM director ORDER BY firstname ASC"); 
        return $query->result(); 
    }

    /*
    query select to get all release years from the 'released' table
    */
    public function getYearReleased()
    {
        $query = $this->db->query("SELECT * FROM released ORDER BY year ASC"); 
        return $query->result(); 
    }

    /*
    query select to get all movies from the 'movie' table
    */
    public function getMovie()
    {
        $query = $this->db->query("SELECT title FROM movie 
                                    ORDER BY title ASC"); 
        return $query->result(); 
    }

    public function addGenre($genre)
    {
        $query = $this->db->query("SELECT genre FROM genre WHERE genre='$genre'"); 
        if($query->num_rows() == 1)
        {
            return true; 
        }else{
            $data['genre'] = $genre;
            $this->db->insert('genre', $data);  
        }
    }

    public function addActor($firstname, $lastname, $actorImage)
    {
        $query = $this->db->query("SELECT firstname, lastname FROM actor WHERE firstname='$firstname' AND lastname='$lastname'"); 
        if($query->num_rows() == 1)
        {
            return true; 
        }else{
            $data['firstname'] = $firstname;
            $data['lastname'] = $lastname; 
            $data['actorImage'] = $actorImage;
            $this->db->insert('actor', $data);  
        }
    }

    public function addDirector($firstname, $lastname, $directorImage)
    {
        $query = $this->db->query("SELECT firstname, lastname FROM director WHERE firstname='$firstname' AND lastname='$lastname'"); 
        if($query->num_rows() == 1)
        {
            return true; 
        }else{
            $data['firstname'] = $firstname;
            $data['lastname'] = $lastname; 
            $data['directorImage'] = $directorImage;
            $this->db->insert('director', $data);  
        }
    }

    public function addYear($year)
    {
        $query = $this->db->query("SELECT year FROM released WHERE year='$year'"); 
        if($query->num_rows() == 1)
        {
            return true; 
        }else{
            $data['year'] = $year; 
            $this->db->insert('released', $data);  
        }
    }

    public function addMovie($data)
    {
        $title = $data['title'];
        $budget = $data['budget'];
        $revenue = $data['revenue']; 
        $duration = $data['duration'];
        $rating = $data['rating'];
        $genreID = $data['genreID'];
        $genreID2 = $data['genreID2'];
        $directorID = $data['directorID'];
        $directorID2 = $data['directorID2'];
        $actorID = $data['actorID'];
        $actorID2 = $data['actorID2'];
        $actorID3 = $data['actorID3'];
        $releasedID = $data['releasedID']; 
        $description = $data['description'];
        $hyperlink = $data['hyperlink'];
        $movieImage = $data['movieImage'];

        $query = $this->db->query("SELECT title FROM movie WHERE title='$title'"); 
        if($query->num_rows() == 1)
        {
            return true; 
        }else{
            $data['title'] = $title; 
            $data['budget'] = $budget;
            $data['revenue'] = $revenue;
            $data['duration'] = $duration;
            $data['rating'] = $rating;
            $data['genreID'] = $genreID; 
            $data['genreID2'] = $genreID2; 
            $data['directorID'] = $directorID; 
            $data['directorID2'] = $directorID; 
            $data['actorID'] = $actorID; 
            $data['actorID2'] = $actorID;
            $data['actorID3'] = $actorID;
            $data['releasedID'] = $releasedID; 
            $data['description'] = $description;  
            $data['hyperlink'] = $hyperlink;
            $data['movieImage'] = $movieImage;

            $this->db->insert('movie', $data); // add movie details to database
        }
    }
}