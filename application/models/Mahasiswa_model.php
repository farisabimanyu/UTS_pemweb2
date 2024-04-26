<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk menambahkan data mahasiswa baru
    public function tambah_mahasiswa($data)
    {
        return $this->db->insert('Mahasiswa', $data);
    }

    // Fungsi untuk mengambil semua data mahasiswa
    public function semua_mahasiswa()
    {
        return $this->db->get('Mahasiswa')->result_array();
    }

    // Fungsi untuk mengambil data mahasiswa berdasarkan NIM
    public function get_mahasiswa_by_nim($nim)
    {
        return $this->db->get_where('Mahasiswa', array('nim' => $nim))->row_array();
    }

    // Fungsi untuk mengupdate data mahasiswa
    public function update_mahasiswa($nim, $data)
    {
        $this->db->where('nim', $nim);
        return $this->db->update('Mahasiswa', $data);
    }

    // Fungsi untuk menghapus data mahasiswa
    public function hapus_mahasiswa($nim)
    {
        return $this->db->delete('Mahasiswa', array('nim' => $nim));
    }
}
