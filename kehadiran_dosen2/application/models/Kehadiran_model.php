<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiran_model extends CI_Model
{
    private $_table = "jadwalaja";

    public $id_jadwal;
    public $pengajar;
    public $matkul;
    public $ruang;
    public $hari;
    public $jam;
    public $kelas;
    public $tanggal;
    public $status;
    public $alasan;

    public function rules()
    {
        return [
            ['field' => 'pengajar',
            'label' => 'pengajar',
            'rules' => 'required'],

            ['field' => 'matkul',
            'label' => 'matkul',
            'rules' => 'required'],

            ['field' => 'ruang',
            'label' => 'ruang',
            'rules' => 'required'],

            ['field' => 'hari',
            'label' => 'hari',
            'rules' => 'required'],

            ['field' => 'jam',
            'label' => 'jam',
            'rules' => 'required'],

            ['field' => 'kelas',
            'label' => 'kelas',
            'rules' => 'required'],

            ['field' => 'tanggal',
            'label' => 'tanggal',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required'],

            ['field' => 'alasan',
            'label' => 'alasan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jadwal" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jadwal = uniqid();
        $this->pengajar = $post["pengajar"];
        $this->matkul = $post["matkul"];
        $this->ruang = $post["ruang"];
        $this->hari = $post["hari"];
        $this->jam = $post["jam"];
        $this->kelas = $post["kelas"];
        $this->tanggal = $post["tanggal"];
        $this->status = $post["status"];
        $this->alasan = $post["alasan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jadwal = $post["id"];
        $this->pengajar = $post["pengajar"];
        $this->matkul = $post["matkul"];
        $this->ruang = $post["ruang"];
        $this->hari = $post["hari"];
        $this->jam = $post["jam"];
        $this->kelas = $post["kelas"];
        $this->tanggal = $post["tanggal"];
        $this->status = $post["status"];
        $this->alasan = $post["alasan"];
        $this->db->update($this->_table, $this, array('id_jadwal' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jadwal" => $id));
    }
}