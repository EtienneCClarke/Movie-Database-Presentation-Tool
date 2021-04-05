<?php
class search_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    // search movies by searching movie title, actor and director
    public function search($input)
    {
        // scan movie titles //
        $title_query = $this->db->query("SELECT title FROM movie 
                                         WHERE title LIKE '%$input%'"); 
        (if $title_query->num_rows() >= 1)
        {
            return $title_query->result(); 
        }else{
            // scan actors //
            $actor_query = $this->db->query("SELECT firstname, lastname FROM actor
                                             WHERE firstname LIKE '%$input%'
                                             OR lastname LIKE '%$input%'"); 
            (if $actor_query->num_rows() >= 1)
            {
                return $actor_query->result(); 
            }else{
                // scan directors //
                $director_query = $this->db->query("SELECT firstname, lastname FROM director
                                             WHERE firstname LIKE '%$input%'
                                             OR lastname LIKE '%$input%'"); 
                (if $director_query->num_rows() >= 1)
                {
                    return $director_query->result(); 
                }
            }
        }
    }
}