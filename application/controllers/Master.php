<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Masters_model');
        $this->load->model('Laporan_model');
    }

    public function index()
    {
        $data['title']  = 'Master';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['iuran']  = $this->Masters_model->getAllIuran();

        $this->form_validation->set_rules('bulan_bayar', 'Bulan Bayar', 'required|trim', [
            'required' => 'bulan bayar harus dipilih'
        ]);
        $this->form_validation->set_rules('jmlh_bayar_lunas', 'Jumlah Bayar Lunas', 'required|trim|numeric|integer', [
            'required' => 'jumlah bayar lunas harus isi',
            'numeric'  => 'Jumlah harus berupa angka bilangan bulat',
            'integer'  => 'Angka harus berupa bilangan bulat, tanpa karakter lainya'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|min_length[4]|integer', [
            'required' => 'tahun harus diisi',
            'integer' => 'tahun harus berupa bilangan bulat'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('master/index', $data);
            $this->load->view('template_auth/footer');
        } else {
            $this->Masters_model->tambahIuran();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            data iuran berhasil disimpan!</div>
            ');
            redirect('master');
        }
    }

    public function kelas()
    {
        $data['title']  = 'Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas']  = $this->Masters_model->getAllKelas();

        $data['kurikulums'] = $this->Masters_model->getAllKurikulum();

        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required|trim', [
            'required' => 'Nama kelas harus diisi'
        ]);

        $this->form_validation->set_rules('id_kurikulum', 'Kurikulum Kelas', 'required|trim', [
            'required' => 'Kurikulum kelas harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('master/kelas', $data);
            $this->load->view('template_auth/footer');
        } else {
            $this->Masters_model->tambahKelas();
        }
    }

    public function kurikulum()
    {
        $data['title']  = 'Kurikulum';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kurikulum']  = $this->Masters_model->getAllkurikulum();

        $this->form_validation->set_rules('nama', 'Nama Kurikulum', 'required|trim', [
            'required' => 'Nama kurikulum harus dipilih'
        ]);
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim', [
            'required' => 'Semester harus dipilih'
        ]);
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|trim|min_length[4]|integer', [
            'required' => 'tahun harus diisi',
            'integer' => 'tahun harus berupa bilangan bulat'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('template_auth/header', $data);
            $this->load->view('template_auth/topbar', $data);
            $this->load->view('template_auth/sidebar', $data);
            $this->load->view('master/kurikulum', $data);
            $this->load->view('template_auth/footer');
        } else {
            $this->Masters_model->tambahKurikulum();
        }
    }

    public function hapusiuran($id)
    {
        $this->Masters_model->hapusIuran($id);
    }

    public function hapuskurikulum($id)
    {
        $this->Masters_model->hapusKurikulum($id);
    }

    public function hapuskelas($id)
    {
        $this->Masters_model->hapusKelas($id);
    }

    public function editiuran()
    {
        $id = $this->input->post('id');
        $result   =   $this->Masters_model->getDataIuranById($id);
        if (!$result) {
            redirect('master');
        } else {

            $this->Masters_model->editIuran($id);
        }
    }

    public function editkelas()
    {
        $id = $this->input->post('id');
        $result = $this->Masters_model->getDataKelasById($id);

        if (!$result) {
            redirect('master/kelas');
        } else {
            $this->Masters_model->editKelas($id);
        }
    }

    public function editkurikulum()
    {
        $id = $this->input->post('id');
        $result   =   $this->Masters_model->getDataKurikulumById($id);
        if (!$result) {
            redirect('master/kurikulum');
        } else {
            $this->Masters_model->editKurikulum($id);
        }
    }

    public function laporan()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporan']    = $this->Laporan_model->getLaporan();
        $data['title'] = 'Laporan';
        $data['sum'] = $this->Laporan_model->getSum();

        $this->load->library('pdfgenerator');
        $file_pdf = 'laporan_data';
        $paper = 'A4';
        $orientation = "potrait";

        $html = $this->load->view('master/laporan', $data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
