<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model
{
    private $_table = "dosens";

    public $id_dosen;
    public $nik;
    public $nama;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'nik',
            'label' => 'NIK',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_dosen" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_dosen = uniqid();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_dosen = $post["id"];
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->db->update($this->_table, $this, array('id_dosen' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_dosen" => $id));
    }
}