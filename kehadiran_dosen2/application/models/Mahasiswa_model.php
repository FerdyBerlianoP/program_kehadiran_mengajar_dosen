<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $_table = "mahasiswas";

    public $id_mahasiswa;
    public $npm;
    public $nama;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'npm',
            'label' => 'NPM',
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
        return $this->db->get_where($this->_table, ["id_mahasiswa" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_mahasiswa = uniqid();
        $this->npm = $post["npm"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_mahasiswa = $post["id"];
        $this->npm = $post["npm"];
        $this->nama = $post["nama"];
        $this->password = $post["password"];
        $this->db->update($this->_table, $this, array('id_mahasiswa' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_mahasiswa" => $id));
    }
}