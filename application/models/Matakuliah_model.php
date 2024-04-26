<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah_model extends CI_Model
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk menambahkan data matakuliah baru
    public function tambah_matakuliah($data)
    {
        return $this->db->insert('matakuliah', $data);
    }

    // Fungsi untuk mengambil semua data matakuliah
    public function semua_matakuliah()
    {
        return $this->db->get('matakuliah')->result_array();
    }

    // Fungsi untuk mengambil data matakuliah berdasarkan ID
    public function get_matakuliah_by_id($id)
    {
        return $this->db->get_where('matakuliah', array('id_matakuliah' => $id))->row_array();
    }

    // Fungsi untuk mengupdate data matakuliah
    public function update_matakuliah($id, $data)
    {
        $this->db->where('id_matakuliah', $id);
        return $this->db->update('matakuliah', $data);
    }

    // Fungsi untuk menghapus data matakuliah
    public function hapus_matakuliah($id)
    {
        return $this->db->delete('matakuliah', array('id_matakuliah' => $id));
    }
}
