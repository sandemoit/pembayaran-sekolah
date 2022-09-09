<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Walikelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Walikelas_model');
    }

    public function index()
    {

        $data['title'] = 'Wali Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['walikelas'] = $this->Walikelas_model->getAllWalikelas();

        $this->load->view('template_auth/header', $data);
        $this->load->view('template_auth/topbar', $data);
        $this->load->view('template_auth/sidebar', $data);
        $this->load->view('walikelas/index', $data);
        $this->load->view('template_auth/footer', $data);
    }

    public function hapuswalikelas($email, $user, $result)
    {
        $email = $this->input->post('email');
        $result = $this->db->get_where('walikelas', ['email' => $email])->row_array();
        $user = $this->db->get_where('user', ['user' => $user])->row_array();

        if ($result) {
            // jika user ada, maka hapus data walikelas
            $this->Walikelas_model->hapusWalikelas();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Walikelas berhasil dihapus!</div>
            ');
            redirect('walikelas');
        } else {
            // jika user tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Walikelas tidak ditemukan!</div>
            ');
            redirect('walikelas');
        }
    }

    public function tambahWalikelas()
    {
        $data['title'] = 'Tambah Wali Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Walikelas_model->getAllKelas();

        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'nama tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'required' => 'email tidak boleh kosong',
            'is_unique' => 'email ini sudah digunakan user lain',
            'valid_email' => 'email tidak valid'
        ]);
        $this->form_validation->set_rules('id_nama_kelas', 'Kelas Binaan', 'trim|required|is_unique[walikelas.id_nama_kelas]', [
            'required' => 'kelas binaan harus di pilih',
            'is_unique' => 'kelas binaan ini sudah ada walikelasnya!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('walikelas/tambah', $data);
            $this->load->view('template_auth/footer');
        } else {
            // jika validasi lolos
            $this->Walikelas_model->tambahWalikelas();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! data walikelas berhasil ditambahkan...</div>
            ');
            redirect('walikelas');
        }
    }
}
