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
        $this->form_validation->set_rules('nip', 'NIP', 'trim|required|is_unique[walikelas.nip]|min_lenght[7]', [
            'required' => 'NIP tidak boleh kosong',
            'is_unique' => 'NIP ini sudah ada walikelasnya!',
            'min_lenght' => 'NIP tidak valid'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_lenght[4]', [
            'required' => 'Password tidak boleh kosong',
            'min_lenght' => 'Password terlalu pendek, MIN 4 karakter'
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

    public function import_excel()
    {
        if (isset($_FILES["fileExcel"]["name"])) {
            $path = $_FILES["fileExcel"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $nip = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $email = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $temp_data[] = array(
                        'name'    => $name,
                        'nip'    => $nip,
                        'email'    => $email
                    );
                }
            }
            $this->load->model('Walikelas_model');
            $insert = $this->Walikelas_model->insert($temp_data);
            if ($insert) {
                $this->session->set_flashdata('message', '<span class="glyphicon glyphicon-ok"></span> Data Berhasil di Import ke Database');
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                $this->session->set_flashdata('message', '<span class="glyphicon glyphicon-remove"></span> Terjadi Kesalahan');
                redirect($_SERVER['HTTP_REFERER']);
            }
        } else {
            echo "Tidak ada file yang masuk";
        }
    }
}
