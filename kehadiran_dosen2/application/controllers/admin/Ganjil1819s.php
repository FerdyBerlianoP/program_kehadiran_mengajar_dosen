<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ganjil1819s extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Ganjil1819_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ganjil1819s"] = $this->Ganjil1819_model->getAll();
        $this->load->view("admin/ganjil1819/list", $data);
    }

    public function add()
    {
        $ganjil1819 = $this->Ganjil1819_model;
        $validation = $this->form_validation;
        $validation->set_rules($ganjil1819->rules());

        if ($validation->run()) {
            $ganjil1819->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/ganjil1819/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ganjil1819s');
       
        $ganjil1819 = $this->Ganjil1819_model;
        $validation = $this->form_validation;
        $validation->set_rules($ganjil1819->rules());

        if ($validation->run()) {
            $ganjil1819->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["ganjil1819"] = $ganjil1819->getById($id);
        if (!$data["ganjil1819"]) show_404();
        
        $this->load->view("admin/ganjil1819/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Ganjil1819_model->delete($id)) {
            redirect(site_url('admin/ganjil1819s'));
        }
    }
}
