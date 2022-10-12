<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function index()
    {
        $data['title']   = 'Laporan Data Siswa';
        $data['user']    = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporan'] = $this->Laporan_model->getLaporan();
        $data['sum']     = $this->Laporan_model->getSum()->total; //untuk menghitung total pembayaran

        $this->load->library('pdfgenerator');
        $file_pdf = 'Laporan Data Siswa';
        $paper = 'A4';
        $orientation = "potrait";

        $html = $this->load->view('export/index', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
