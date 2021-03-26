<?php
class delete_record_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    // delete a genre record by id
    public function deleteGenre($id)
    {
        $this->db->query("DELETE FROM genre WHERE genreID=$id"); 
    }

    // delete an actor record by id
    public function deleteActor($id)
    {
        $this->db->query("DELETE FROM actor WHERE actorID=$id"); 
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