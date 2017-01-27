<?php

class Images extends CI_model {
    
    //constructor
    function __construct() {
        parent::__construct();
    }
    
    //return all images descending order by post date
    function all() {
        $this->db->order_by("id","desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
    
    //return newest 3 images
    function newest() {
        $this->db->order_by("id","desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}