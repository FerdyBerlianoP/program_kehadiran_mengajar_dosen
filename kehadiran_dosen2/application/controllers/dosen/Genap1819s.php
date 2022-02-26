<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Genap1819s extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Genap1819_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["genap1819s"] = $this->Genap1819_model->getAll();
        $this->load->view("dosen/genap1819/list", $data);
    }

    public function add()
    {
        $genap1819 = $this->Genap1819_model;
        $validation = $this->form_validation;
        $validation->set_rules($genap1819->rules());

        if ($validation->run()) {
            $genap1819->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("dosen/genap1819/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dosen/genap1819s');
       
        $genap1819 = $this->Genap1819_model;
        $validation = $this->form_validation;
        $validation->set_rules($genap1819->rules());

        if ($validation->run()) {
            $genap1819->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["genap1819"] = $genap1819->getById($id);
        if (!$data["genap1819"]) show_404();
        
        $this->load->view("dosen/genap1819/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Genap1819_model->delete($id)) {
            redirect(site_url('dosen/genap1819s'));
        }
    }
}
