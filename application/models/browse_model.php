<?php
class browse_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }
  
    // get all movies
    public function all_movies()
    {
        $query = $this->db->query("SELECT title, year, budget, rating, hyperlink, image, movieID, 
                                    EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) as duration FROM movie 
                                    INNER JOIN released USING(releasedID)"); 
        return $query->result(); 
    }
}