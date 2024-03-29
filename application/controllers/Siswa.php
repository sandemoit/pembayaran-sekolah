<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Siswas_model');
        $this->load->model('Masters_model');
    }

    public function index()
    {
        $data['title'] = 'Data Siswa';
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Siswas_model->getAllSiswa();
        $data['kelas'] = $this->Siswas_model->getAllKelas();
        $data['iuran'] = $this->Siswas_model->getAllIuran();

        $this->form_validation->set_rules('bulan_bayar', 'Untuk pembayaran bulan', 'required|trim');
        $this->form_validation->set_rules('tahun_bayar', 'Untuk pembayaran tahun', 'required|trim|integer');
        $this->form_validation->set_rules('jmlh_bayar', 'Jumlah bayar', 'required|trim|numeric|integer');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('siswa/index', $data);
            $this->load->view('template_auth/footer', $data);
        } else {
            $this->Siswas_model->tambahTransaksi();
        }
    }

    public function tambahSiswa()
    {
        $data['title'] = 'Tambah Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Siswas_model->getAllKelas();

        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|numeric|integer|is_unique[data_siswa.nik]', [
            'required' => 'NIK tidak Boleh Kosong!',
            'numeric'  => 'NIK harus berupa angka!',
            'integer'  => 'NIK hanya berupa bilangan bulat',
            'is_unique' => 'NIK sudah terdaftar'
        ]);
        $this->form_validation->set_rules('nok', 'NO KK', 'required|trim|numeric|integer|is_unique[data_siswa.nok]', [
            'required' => 'No KK tidak Boleh Kosong!',
            'integer' => 'No KK hanya berupa bilangan bulat!',
            'numeric'  => 'No KK harus berupa angka!',
            'is_unique' => 'No KK sudah terdaftar'
        ]);
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|trim', [
            'required' => 'Nama siswa tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => 'jenis kelamin harus dipilih'
        ]);
        $this->form_validation->set_rules('kelas_id', 'Kelas', 'required', [
            'required' => 'kelas harus dipilih'
        ]);
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim', [
            'required' => 'Nama ibu tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required|trim', [
            'required' => 'Nama ayah tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('alamat_ortu', 'Alamat Orang Tua', 'required|trim', [
            'required' => 'Alamat Orang Tua tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('siswa/tambahsiswa', $data);
            $this->load->view('template_auth/footer', $data);
        } else {
            //insert data siswa
            $this->Siswas_model->tambahSiswa();
        }
    }

    public function hapussiswa($nik)
    {
        $this->Siswas_model->hapusSiswa($nik);
    }

    public function hapustransaksi($id)
    {
        $this->Siswas_model->hapusTransaksi($id);
    }

    public function transaksi()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['transaksi'] = $this->Siswas_model->getAllTransaksi();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('siswa/transaksi', $data);
        $this->load->view('template_auth/footer', $data);
    }

    public function editSiswa()
    {
        $nik = $this->input->post('nik');
        $result = $this->Siswas_model->getSiswaByNik($nik);

        if ($result) {
            // jika data ada

            $data['title'] = 'Edit Data Siswa';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['siswa'] = $result;
            $data['kelas'] = $this->Siswas_model->getAllKelas();

            $this->form_validation->set_rules('nok', 'NO KK', 'required|trim|numeric');
            $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required|trim');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
            $this->form_validation->set_rules('kelas_id', 'Kelas', 'required|trim');
            $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required|trim');
            $this->form_validation->set_rules('nama_ayah', 'Nama Ibu', 'required|trim');

            if ($this->form_validation->run() == false) {

                $this->load->view('template_auth/header', $data);
                $this->load->view('template_auth/topbar', $data);
                $this->load->view('template_auth/sidebar', $data);
                $this->load->view('siswa/editsiswa', $data);
                $this->load->view('template_auth/footer', $data);
            } else {
                // Edit Data Siswa
                $this->Siswas_model->editSiswa($nik);
            }
        } else {
            // jika data tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Siswa gagal diupdate!, data siswa tidak ditemukan</div>
            ');
            redirect('siswa');
        }
    }

    public function invoice()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Cetak Invocie';
        $data['invoice'] = $this->Siswas_model->invoice();
        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('siswa/invoice', $data);
        $this->load->view('template_auth/footer', $data);
    }
}
