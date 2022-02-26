<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hadirs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Jadwalaja_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id = $this->session->userdata("nama");
        $data["jadwalajas"] = $this->Jadwalaja_model->getByNik($id);
        $this->load->view("dosen/jadwalaja/list", $data);
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

        $this->load->view("dosen/jadwalaja/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dosen/jadwalajas');
       
        $jadwalaja = $this->Jadwalaja_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalaja->rules());

        if ($validation->run()) {
            $jadwalaja->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jadwalaja"] = $jadwalaja->getById($id);
        if (!$data["jadwalaja"]) show_404();
        
        $this->load->view("dosen/jadwalaja/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Jadwalaja_model->delete($id)) {
            redirect(site_url('dosen/jadwalajas'));
        }
    }
}
