<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('portfolio');
    }
}
