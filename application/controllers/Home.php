<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('template/header_home', $data);
        $this->load->view('template/navbar_home');
        $this->load->view('frontend/home');
        $this->load->view('template/footer_home');
    }
}
