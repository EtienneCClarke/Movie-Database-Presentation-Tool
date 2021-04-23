<?php
class search_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    // // search movies by searching movie title, actor and director
    // public function search($input)
    // {
    //     // scan movie titles //
    //     $title_query = $this->db->query("SELECT title FROM movie 
    //                                      WHERE title LIKE '%$input%'"); 
    //     if($title_query->num_rows() >= 1)
    //     {
    //         return $title_query->result(); 
    //     }else{
    //         // scan actors //
    //         $actor_query = $this->db->query("SELECT firstname, lastname FROM actor
    //                                          WHERE firstname LIKE '%$input%'
    //                                          OR lastname LIKE '%$input%'"); 
    //         if($actor_query->num_rows() >= 1)
    //         {
    //             return $actor_query->result(); 
    //         }else{
    //             // scan directors //
    //             $director_query = $this->db->query("SELECT firstname, lastname FROM director
    //                                          WHERE firstname LIKE '%$input%'
    //                                          OR lastname LIKE '%$input%'"); 
    //             if($director_query->num_rows() >= 1)
    //             {
    //                 return $director_query->result(); 
    //             }
    //         }
    //     }
    // }

    // For some reason i kept getting errors with your search i dno 
    // why but ive made this one tenmporarily as a workaround
    public function search_($input) {
        $query = $this->db->query(' SELECT title, genre, movie.genreID, year, genreID2, budget, revenue, rating, hyperlink, image, movieID,
                                    director.firstname, director.lastname, actor.firstname, actor.lastname,
                                    EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) as duration
                                    FROM movie
                                    INNER JOIN released USING(releasedID)
                                    INNER JOIN actor ON actor.actorID = movie.actorID OR actor.actorID = movie.actorID2 OR actor.actorID = movie.actorID3
                                    INNER JOIN director ON director.directorID = movie.directorID OR director.directorID = movie.directorID2
                                    INNER JOIN genre ON genre.genreID = movie.genreID OR genre.genreID = movie.genreID2
                                    WHERE concat(title, " ", director.firstname, " ", director.lastname, " ", actor.firstname, " ", actor.lastname, " ", genre)
                                    LIKE "%'.$input.'%"
                                    GROUP BY movieID');
        return $query->result();
    }
}