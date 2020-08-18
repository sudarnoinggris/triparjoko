<?php

class Tables_model extends CI_Model
{

    public function __construct()
    {

        $this->load->database();
    }

    function get_data()
    {

        $query = $this->db->get('tables');
        return $query->result_array();
    }
}