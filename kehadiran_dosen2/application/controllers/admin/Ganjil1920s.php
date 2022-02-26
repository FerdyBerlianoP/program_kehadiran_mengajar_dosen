<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ganjil1920s extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Ganjil1920_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ganjil1920s"] = $this->Ganjil1920_model->getAll();
        $this->load->view("admin/ganjil1920/list", $data);
    }

    public function add()
    {
        $ganjil1920 = $this->Ganjil1920_model;
        $validation = $this->form_validation;
        $validation->set_rules($ganjil1920->rules());

        if ($validation->run()) {
            $ganjil1920->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/ganjil1920/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ganjil1920s');
       
        $ganjil1920 = $this->Ganjil1920_model;
        $validation = $this->form_validation;
        $validation->set_rules($ganjil1920->rules());

        if ($validation->run()) {
            $ganjil1920->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["ganjil1920"] = $ganjil1920->getById($id);
        if (!$data["ganjil1920"]) show_404();
        
        $this->load->view("admin/ganjil1920/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Ganjil1920_model->delete($id)) {
            redirect(site_url('admin/ganjil1920s'));
        }
    }
}
