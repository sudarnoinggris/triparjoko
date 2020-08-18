<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = "Blank";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('blank/index', $data);
        $this->load->view('templates/footer');
    }
}
