<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswas_model extends CI_Model
{

    public function getAllSiswa()
    {
        $query = "SELECT *
                    FROM `kelas` JOIN `data_siswa`
                    ON `kelas`.`id` = `data_siswa`.`kelas_id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function insert($data)
    {
        $insert = $this->db->insert_batch('data_siswa', $data);
        if ($insert) {
            return true;
        }
    }

    public function getAllWalikelas()
    {
        return $this->db->get('walikelas')->result_array();
    }

    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }


    public function getAllTransaksi()
    {
        $query = "SELECT *
                    FROM `data_siswa` JOIN `transaksi`
                    ON `data_siswa`.`id`= `transaksi`.`id_siswa`
                    -- FROM `data_siswa` JOIN `transaksi` JOIN `kelas`
                    -- ON `data_siswa`.`id` = `transaksi`.`id_siswa` AND `kelas`.`id` = `transaksi`.`id_kelas`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }

    public function getAllIuran()
    {
        return $this->db->get('iuran')->result_array();
    }

    public function getSiswaByNik($nik)
    {
        return $this->db->get_where('data_siswa', ['nik' => $nik])->row_array();
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('data_siswa', ['id' => $id])->row_array();
    }

    public function tambahSiswa()
    {
        $data = [
            'nik'              => $this->input->post('nik', true),
            'nok'              => $this->input->post('nok', true),
            'nama_siswa'       => $this->input->post('nama_siswa', true),
            'jenis_kelamin'    => $this->input->post('jenis_kelamin', true),
            'kelas_id'         => $this->input->post('kelas_id', true),
            'nama_ayah'        => $this->input->post('nama_ayah', true),
            'nama_ibu'         => $this->input->post('nama_ibu', true),
            'alamat_ortu'      => $this->input->post('alamat_ortu', true)
        ];

        $this->db->insert('data_siswa', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! data siswa berhasil di tambah</div>
            ');
        redirect('siswa/tambahsiswa');
    }

    public function tambahTransaksi()
    {

        $jumlahBayar    = $this->input->post('jmlh_bayar');
        $bulanBayar     = $this->input->post('bulan_bayar');
        $tahunBayar     = $this->input->post('tahun_bayar');
        $cek            = $this->db->get_where('iuran', ['bulan_bayar' => $bulanBayar, 'tahun' => $tahunBayar])->row_array();

        if (!$cek) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                data iuran untuk bulan <strong>' . $bulanBayar . '</strong> tahun <strong>' . $tahunBayar . '</strong> belum di tambah, silahkan lakukan tambah data di master</div>');
            redirect('siswa');
        } else {

            $sisa   = $cek['jmlh_bayar_lunas'] - $jumlahBayar;
            if ($sisa <= 0) {
                $status = '<span class="label label-success">Lunas</span>';
            } else {
                $status = '<span class="label label-danger">Belum Lunas</span>';
            }
        }

        $data = [
            'id_siswa'          => $this->input->post('id', true),
            // 'id_kelas'          => $this->input->post('id_kelas', true),
            'bulan_bayar'       => $this->input->post('bulan_bayar', true),
            'tahun_bayar'       => $this->input->post('tahun_bayar', true),
            'jmlh_bayar'        => $this->input->post('jmlh_bayar', true),
            'status'            => $status,
            'sisa'              => $sisa,
            'tgl_bayar'         => time(),
            'nama_petugas'      => $this->input->post('nama_petugas', true)
        ];

        $this->db->insert('transaksi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! data transaksi siswa berhasil di tambah</div>
            ');
        redirect('siswa/transaksi');
    }

    public function editSiswa($nik)
    {
        $data = [
            'nik'           => $this->input->post('nik', true),
            'nok'           => $this->input->post('nok', true),
            'nama_siswa'    => $this->input->post('nama_siswa', true),
            'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
            'kelas_id'      => $this->input->post('kelas_id', true),
            'nama_ayah'     => $this->input->post('nama_ayah', true),
            'nama_ibu'      => $this->input->post('nama_ibu', true),
            'alamat_ortu'   => $this->input->post('alamat_ortu', true)
        ];

        $this->db->set($data);
        $this->db->where('nik', $nik);
        $this->db->update('data_siswa', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            data siswa berhasil di ubah</div>
            ');
        redirect('siswa');
    }

    public function hapusSiswa($nik)
    {
        $result = $this->db->get_where('data_siswa', ['nik' => $nik])->row_array();

        if (!$result) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data siswa gagal dihapus! data tidak ditemukan</div>
                ');
            redirect('siswa');
        } else {
            $this->db->where('nik', $nik);
            $this->db->delete('data_siswa');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Siswa Berhasil dihapus!</div>
                ');
            redirect('siswa');
        }
    }

    public function hapusTransaksi($id)
    {
        $result = $this->db->get_where('transaksi', ['id' => $id])->row_array();

        if (!$result) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data siswa gagal dihapus! data tidak ditemukan</div>
                ');
            redirect('siswa/transaksi');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('transaksi');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Siswa Berhasil dihapus!</div>
                ');
            redirect('siswa/transaksi');
        }
    }

    public function invoice()
    {
        $query = "SELECT *
                    FROM `data_siswa` JOIN `transaksi`
                    ON `data_siswa`.`id` = `transaksi`.`id_siswa`
                    WHERE `transaksi`.`id` = " . $this->uri->segment(3);

        return $this->db->query($query)->result_array();
    }
}
