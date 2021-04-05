<?php
class movie_preview_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    public function movie_details($movie_id)
    {
        $query = $this->db->query("SELECT title, 
                                    EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) as duration, 
                                    rating, 
                                    CONCAT(g1.genre,', ',g2.genre) AS genre, 
                                    year, 
                                    CONCAT(a.firstname,' ',a.lastname) AS actor, 
                                    CONCAT(d.firstname,' ',d.lastname) AS director, 
                                    budget, 
                                    revenue, 
                                    description
                                    FROM movie m
                                    INNER JOIN genre g1 USING(genreID)
                                    INNER JOIN genre g2 ON g2.genreID = m.genreID2
                                    INNER JOIN released USING(releasedID)
                                    INNER JOIN actor a USING(actorID)
                                    INNER JOIN director d USING(directorID)
                                    WHERE movieID = $movie_id"); 
        return $query->result(); 
    }
}