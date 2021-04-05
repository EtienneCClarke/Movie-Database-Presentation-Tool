<?php
class landing_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    // get all movies above rating of 8
    public function popular_movies()
    {
        $query = $this->db->query("SELECT title, year, budget, rating, hyperlink, image, movieID, 
                                    EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) as duration FROM movie 
                                    INNER JOIN released USING(releasedID)
                                    WHERE rating > 8"); 
        return $query->result(); 
    }

    // get the last recent 10 movies added
    public function recently_added()
    {
        $query = $this->db->query("SELECT title, year, budget, rating, hyperlink, image, movieID, 
                                    EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) as duration
                                    FROM movie 
                                    INNER JOIN released USING(releasedID)
                                    ORDER BY movieID DESC LIMIT 10"); 
        return $query->result(); 
    }
}