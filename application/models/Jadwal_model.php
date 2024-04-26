<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk menambahkan data jadwal baru
    public function tambah_jadwal($data)
    {
        return $this->db->insert('jadwal', $data);
    }

    // Fungsi untuk mengambil semua data jadwal
    public function semua_jadwal()
    {
        return $this->db->get('jadwal')->result_array();
    }

    // Fungsi untuk mengambil data jadwal berdasarkan ID
    public function get_jadwal_by_id($id)
    {
        return $this->db->get_where('jadwal', array('id_jadwal' => $id))->row_array();
    }

    // Fungsi untuk mengupdate data jadwal
    public function update_jadwal($id, $data)
    {
        $this->db->where('id_jadwal', $id);
        return $this->db->update('jadwal', $data);
    }

    // Fungsi untuk menghapus data jadwal
    public function hapus_jadwal($id)
    {
        return $this->db->delete('jadwal', array('id_jadwal' => $id));
    }
}
