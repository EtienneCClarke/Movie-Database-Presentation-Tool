<?php
class movie_preview_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    // get all information from all tables with inner joins for the preview page
    public function movie_details($movie_id)
    {
        $query = $this->db->query("SELECT title, 
                                    EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) as duration, 
                                    rating, 
                                    CONCAT(g1.genre,', ',g2.genre) AS genre, 
                                    year, 
                                    CONCAT(d.firstname,' ',d.lastname) AS director, 
                                    CONCAT(d2.firstname,' ',d2.lastname) AS director2, 
                                    d.directorImage AS directorImage,
                                    d2.directorImage AS directorImage2,
                                    CONCAT(a.firstname,' ',a.lastname) AS actor,
                                    CONCAT(a2.firstname,' ',a2.lastname) AS actor2,
                                    CONCAT(a3.firstname,' ',a3.lastname) AS actor3,
                                    a.actorImage as actorImage, 
                                    a2.actorImage as actorImage2, 
                                    a3.actorImage as actorImage3, 
                                    budget, 
                                    revenue, 
                                    movieImage, 
                                    hyperlink, 
                                    description
                                    FROM movie m
                                    INNER JOIN genre g1 USING(genreID)
                                    INNER JOIN genre g2 ON g2.genreID = m.genreID2
                                    INNER JOIN released USING(releasedID)
                                    INNER JOIN actor a USING(actorID)
                                    INNER JOIN actor a2 ON a2.actorID = m.actorID2
                                    INNER JOIN actor a3 ON a3.actorID = m.actorID3
                                    INNER JOIN director d USING(directorID)
                                    INNER JOIN director d2 ON d2.directorID = m.directorID2
                                    WHERE movieID = $movie_id"); 
        return $query->result(); 
    }
}