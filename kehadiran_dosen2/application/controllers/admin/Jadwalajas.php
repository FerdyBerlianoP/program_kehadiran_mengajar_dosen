<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwalajas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Jadwalaja_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jadwalajas"] = $this->Jadwalaja_model->getAll();
        $this->load->view("admin/jadwalaja/list", $data);
    }

    public function add()
    {
        $jadwalaja = $this->Jadwalaja_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalaja->rules());

        if ($validation->run()) {
            $jadwalaja->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/jadwalaja/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/jadwalajas');
       
        $jadwalaja = $this->Jadwalaja_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalaja->rules());

        if ($validation->run()) {
            $jadwalaja->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jadwalaja"] = $jadwalaja->getById($id);
        if (!$data["jadwalaja"]) show_404();
        
        $this->load->view("admin/jadwalaja/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Jadwalaja_model->delete($id)) {
            redirect(site_url('admin/jadwalajas'));
        }
    }
}
