<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    private $_table = "jadwal";

    public $id_jadwal;
    public $id_pengajar;
    public $id_matkul;
    public $id_ruang;
    public $id_hari;
    public $id_jam;
    public $status;
    public $alasan;

    public function rules()
    {
        return [
            ['field' => 'id_pengajar',
            'label' => 'pengajar',
            'rules' => 'required'],

            ['field' => 'id_matkul',
            'label' => 'matkul',
            'rules' => 'required'],

            ['field' => 'id_ruang',
            'label' => 'ruang',
            'rules' => 'required'],

            ['field' => 'id_hari',
            'label' => 'hari',
            'rules' => 'required'],

            ['field' => 'id_jam',
            'label' => 'id_jam',
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

    function ambil()
    {
        $this->db->join('pengajar p', 'j.id_pengajar = p.id_pengajar');
        $this->db->join('matkul m', 'j.id_matkul = m.id_matkul');
        $this->db->join('ruang r', 'j.id_ruang = r.id_ruang');
        $this->db->join('hari h', 'j.id_hari = h.id_hari');
        $this->db->join('jam j', 'j.id_pengajar = j.id_jam');
        $this->db->order_by('id_jadwal');
        return $this->db->get('jadwal')->result();
    }

    function get(){
        $query = $this->db->query('SELECT * FROM tb_pengajar');
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jadwal = uniqid();
        $this->id_pengajar = $post["id_pengajar"];
        $this->id_matkul = $post["id_matkul"];
        $this->id_ruang = $post["id_ruang"];
        $this->id_hari = $post["id_hari"];
        $this->id_jam = $post["id_jam"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jadwal = $post["id"];
        $this->id_pengajar = $post["id_pengajar"];
        $this->id_matkul = $post["id_matkul"];
        $this->id_ruang = $post["id_ruang"];
        $this->id_hari = $post["id_hari"];
        $this->id_jam = $post["id_jam"];
        $this->status = $post["status"];
        $this->alasan = $post["alasan"];
        $this->db->update($this->_table, $this, array('id_jadwal' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jadwal" => $id));
    }
}