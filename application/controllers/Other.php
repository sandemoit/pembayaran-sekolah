<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Other extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Masters_model');
        $this->load->model('Laporan_model');
        $this->load->library('form_validation');
        $this->load->model('Setting_model');
    }

    public function index()
    {
        $data['title']   = 'Laporan Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporan']    = $this->Laporan_model->getLaporan();
        $data['sum'] = $this->Laporan_model->getSum()->total; //untuk menghitung total pembayaran

        $this->load->library('pdfgenerator');
        $file_pdf = 'laporan_data';
        $paper = 'A4';
        $orientation = "potrait";

        $html = $this->load->view('other/laporan', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }

    public function setting()
    {
        $data['title']   = 'Setting Aplication';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['setting']    = $this->Setting_model->getSetting();

        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required|trim');
        $this->form_validation->set_rules('alamat_sekolah', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nama_kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('nohp', 'Telp', 'required|trim');
        $this->form_validation->set_rules('email_sekolah', 'Alamat Email', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('other/setting', $data);
            $this->load->view('template_auth/footer', $data);
        } else {
            $this->Setting_model->editSetting();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Setting berhasil diubah</div>');
            redirect('other/setting');
        }
    }

    public function pejabat()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['setting']    = $this->Setting_model->getSetting();

        $this->form_validation->set_rules('kepsek', 'Kepala Sekolah', 'required|trim');
        $this->form_validation->set_rules('nip_kepsek', 'NIP Kepala Sekolah', 'required|trim');
        $this->form_validation->set_rules('bendahara', 'Bendahara', 'required|trim');
        $this->form_validation->set_rules('nip_bendahara', 'NIP Bendahara', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('other/setting', $data);
            $this->load->view('template_auth/footer', $data);
        } else {
            $data = [
                'kepsek' => $this->input->post('kepsek'),
                'nip_kepsek' => $this->input->post('nip_kepsek'),
                'bendahara' => $this->input->post('bendahara'),
                'nip_bendahara' => $this->input->post('nip_bendahara')
            ];

            $this->db->update('setting', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Setting berhasil diubah</div>');
            redirect('other/setting');
        }
    }
}
