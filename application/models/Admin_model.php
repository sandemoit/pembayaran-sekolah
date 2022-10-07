<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function get_data()
    {
        return $this->db->get('user');
    }

    function delete($where, $table)
    {
        $this->db->delete($table, $where);
    }

    function getSum()
    {
        return $this->db->query("SELECT SUM(jmlh_bayar) as total FROM transaksi");
    }
}
