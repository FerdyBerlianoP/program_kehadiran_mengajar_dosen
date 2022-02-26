<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadirans extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kehadiran_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["kehadirans"] = $this->kehadiran_model->getAll();
        $this->load->view("mahasiswa/kehadiran/list", $data);
    }

    public function add()
    {
        $kehadiran = $this->kehadiran_model;
        $validation = $this->form_validation;
        $validation->set_rules($kehadiran->rules());

        if ($validation->run()) {
            $kehadiran->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("mahasiswa/kehadiran/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('mahasiswa/Kehadirans');
       
        $kehadiran = $this->kehadiran_model;
        $validation = $this->form_validation;
        $validation->set_rules($kehadiran->rules());

        if ($validation->run()) {
            $kehadiran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kehadiran"] = $kehadiran->getById($id);
        if (!$data["kehadiran"]) show_404();
        
        $this->load->view("mahasiswa/kehadiran/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kehadiran_model->delete($id)) {
            redirect(site_url('mahasiswa/Kehadirans'));
        }
    }
}
