<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kontak';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/contact');
        $this->load->view('template/footer');
    }
}
