<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Portfolio';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/portfolio');
        $this->load->view('template/footer');
    }

    public function portfoliodetail()
    {
        $data['title'] = 'Judul';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/page_header');
        $this->load->view('frontend/portfolio-detail');
        $this->load->view('template/footer');
    }
}
