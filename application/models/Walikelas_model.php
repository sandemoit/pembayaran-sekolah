<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Walikelas_model extends CI_Model
{
    public function getAllWalikelas()
    {
        $query = "SELECT *
                    FROM `kelas` JOIN `walikelas`
                    ON `kelas`.`id` = `walikelas`.`id_nama_kelas`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }


    public function hapusWalikelas($email, $user, $result)
    {
        $this->db->set($email);
        $this->db->where($result);
        $this->db->delete('walikelas');

        $this->db->where($user);
        $this->db->delete('user');
    }

    public function tambahWalikelas()
    {
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);

        $data1 = [
            'name' => $name,
            'email' => $email,
            'id_nama_kelas' => $this->input->post('id_nama_kelas')
        ];

        $data2 = [
            'name' => $name,
            'email' => $email,
            'image' => 'default.jpg',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'role_id' => 3,
            'is_active' => 1,
            'date_created' => time()
        ];

        $this->db->insert('walikelas', $data1);
        $this->db->insert('user', $data2);
    }
}
