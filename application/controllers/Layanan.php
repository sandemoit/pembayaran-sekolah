<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function webcustom()
    {
        $data['title'] = 'Web Custom';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/web-custom');
        $this->load->view('template/footer');
    }

    public function paketaplikasiweb()
    {
        $data['title'] = 'Paket Aplikasi Web';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/paket-aplikasi-web');
        $this->load->view('template/footer');
    }

    public function webwp()
    {
        $data['title'] = 'Web WP';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/web-wp');
        $this->load->view('template/footer');
    }
}
