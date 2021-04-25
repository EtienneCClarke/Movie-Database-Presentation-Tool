<?php
class browse_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }
  
    // get all movies
    public function all_movies()
    {
        $query = $this->db->query("SELECT title, genreID, genreID2, year, budget, revenue, rating, hyperlink, movieImage, movieID,
                                    EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) as duration FROM movie 
                                    INNER JOIN released USING(releasedID)"); 
        return $query->result(); 
    }

    public function all_genres() {
        $query = $this->db->query("SELECT * FROM genre;");
        return $query->result();
    }
}