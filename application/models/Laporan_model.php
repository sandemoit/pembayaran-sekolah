<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
    public function getLaporan()
    {
        $query = "SELECT *
                    FROM `data_siswa` JOIN `transaksi` JOIN `kelas`
                    ON `data_siswa`.`id` = `transaksi`.`id_siswa` AND `kelas`.`id` = `transaksi`.`id_kelas`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getSUm()
    {
        $query = "SELECT SUM(`transaksi`.`jmlh_bayar`) AS `total`
                    FROM `transaksi`
        ";

        return $this->db->query($query)->row_array();
    }
}
