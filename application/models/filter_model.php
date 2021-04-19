<?php
class filter_model extends CI_Model{

    public function __construct()
    {
        $this->load->database(); 
    }

    // filter movies
    public function filter($data)
    {
        // get all data inputs to be used for the query
        $budget_one = $data['budget_one'];
        $budget_two = $data['budget_two'];
        $year_one = $data['year_one'];
        $year_two = $data['year_two'];
        $revenue_one = $data['revenue_one'];
        $revenue_two = $data['revenue_two'];
        $runtime_one = $data['runtime_one'];
        $runtime_two = $data['runtime_two'];
        $sort = $data['sort'];
        $genre = $data['genre'];
        $order = $data['order'];

        // if user filtered by genre and sort
        if($genre != "unselected" && $sort != "unselected")
        {
            // query to filter movies
            $query = $this->db->query("SELECT title, year, budget, rating, hyperlink, image, movieID, genre, revenue, 
                                        EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) as duration FROM movie 
                                        INNER JOIN released USING(releasedID)
                                        INNER JOIN genre USING(genreID)
                                        WHERE budget BETWEEN $budget_one AND $budget_two
                                        AND year BETWEEN $year_one AND $year_two
                                        AND revenue BETWEEN $revenue_one AND $revenue_two
                                        AND EXTRACT(HOUR FROM duration)*60 + EXTRACT(MINUTE FROM duration) BETWEEN $runtime_one AND $runtime_two"); 
            return $query->result(); 
        }
    }
}