<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('tables_model');
    }
    public function index()
    {
        $data['title'] = "Form";
        $data['form'] = $this->tables_model->get_data();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('form/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $data['title'] = 'Form';
        $data['subtitle'] = 'Add Form';

        $this->form_validation->set_rules('userid', 'userid', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('form/addView', $data);
            $this->load->view('templates/footer');
        } else {

          
            $this->session->set_flashdata('message', 'Penambahan data berhasil');
            redirect('tables');
        }
    }

    function edit($id)
    {
        $data['title'] = 'Edit Form';
        $data['subtitle'] = 'Edit Form';
       // $data['users'] = $this->users_model->getbyid($id);

        $this->form_validation->set_rules('userid', 'userid', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('form/editView', $data);
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
        //$this->users_model->hapus_data('users', $where);
        $this->session->set_flashdata('message', 'Penghapusan userid ' . $id . ' Berhasil');
        redirect('form');
    }
}