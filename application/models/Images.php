<?php

/*
 * Image class
 */
class Images extends CI_Model {
    //constructor (a good practice)
    function __construct()
    {
        partent::__construct();
    }

    //return all images, descending order by post date
    function all()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query ->result_array();
    }

    // returns the 3 newest images, descending order by post date
    function newest() {
        $this->db->order_by("id","desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query ->result_array();
    }
}