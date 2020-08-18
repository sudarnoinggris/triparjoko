<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        if (!$this->session->userdata('userid')) {
            redirect('auth');
        }
    
    }
    public function index()
    {
        $data['title'] = "Users";
        $data['users'] = $this->users_model->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = 'User';
        $data['subtitle'] = 'Add User';

        $this->form_validation->set_rules('userid', 'userid', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('users/addView', $data);
            $this->load->view('templates/footer');
        } else {

            $this->users_model->add_data();
            $this->session->set_flashdata('message', 'Penambahan user berhasil');
            redirect('users');
        }
    }
    function edit($id)
    {
        $data['title'] = 'User';
        $data['subtitle'] = 'Edit User';
        $data['users'] = $this->users_model->getbyid($id);

        $this->form_validation->set_rules('userid', 'userid', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('users/editView', $data);
            $this->load->view('templates/footer');
        } else {

            $this->users_model->edit_data();
            $this->session->set_flashdata('message', 'Edit Data berhasil');
            redirect('users');
        }
    }

    function delete($id)
    {
        $where = array('userid' => rawurldecode($id));
        $this->users_model->hapus_data('users', $where);
        $this->session->set_flashdata('message', 'Penghapusan userid ' . $id . ' Berhasil');
        redirect('users');
    }
}
