<?php
class delete_record_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    // delete a genre record by genre
    public function deleteGenre($genre)
    { 
        $this->db->query("DELETE FROM genre WHERE genre='$genre'");  
    }

    // delete an actor record by firstname and lastname
    public function deleteActor($firstname, $lastname)
    {
        $this->db->query("DELETE FROM actor WHERE firstname='$firstname' AND lastname='$lastname'"); 

        $query = $this->db->query("SELECT firstname, lastname FROM actor WHERE firstname='$firstname' AND lastname='$lastname'"); 
        if($query->num_rows() == 1)
        {
            $this->db->query("DELETE FROM actor WHERE firstname='$firstname' AND lastname='$lastname'"); 
        }else{
            return false; 
        }
    }

    // delete a director record by id
    public function deleteDirector($id)
    {
        $this->db->query("DELETE FROM director WHERE directorID=$id"); 
    }

    // delete a year record by id
    public function deleteYear($id)
    {
        $this->db->query("DELETE FROM released WHERE releasedID=$id"); 
    }

    // delete a movie record by id
    public function deleteMovie($id)
    {
        $this->db->query("DELETE FROM movie WHERE movieID=$id"); 
    }
}