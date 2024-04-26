<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalMahasiswa_model extends CI_Model
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk menambahkan data jadwal mahasiswa baru
    public function tambah_jadwal_mahasiswa($data)
    {
        return $this->db->insert('jadwal_mahasiswa', $data);
    }

    // Fungsi untuk mengambil semua data jadwal mahasiswa
    public function semua_jadwal_mahasiswa()
    {
        $this->db->select('*');
        $this->db->from('jadwal_mahasiswa');
        $this->db->join('jadwal', 'jadwal.id_jadwal=jadwal_mahasiswa.id_jadwal', 'left');
        $this->db->join('mahasiswa', 'mahasiswa.nim=jadwal_mahasiswa.nim', 'left');
        $this->db->join('matakuliah', 'matakuliah.id_matakuliah=jadwal.id_matakuliah', 'left');
        return $this->db->get()->result_array();
    }

    // Fungsi untuk mengambil data jadwal mahasiswa berdasarkan NIM
    public function get_jadwal_mahasiswa_by_nim($nim)
    {
        $this->db->select('*');
        $this->db->from('jadwal_mahasiswa');
        $this->db->join('jadwal', 'jadwal.id_jadwal=jadwal_mahasiswa.id_jadwal', 'left');
        $this->db->join('mahasiswa', 'mahasiswa.nim=jadwal_mahasiswa.nim', 'left');
        $this->db->join('matakuliah', 'matakuliah.id_matakuliah=jadwal.id_matakuliah', 'left');
        $this->db->where('mahasiswa.nim', $nim);
        return $this->db->get()->result_array();
    }

    // Fungsi untuk mengupdate data jadwal mahasiswa
    public function update_jadwal_mahasiswa($id, $data)
    {
        $this->db->where('id_jadwal_mahasiswa', $id);
        return $this->db->update('jadwal_mahasiswa', $data);
    }

    // Fungsi untuk menghapus data jadwal mahasiswa
    public function hapus_jadwal_mahasiswa($id)
    {
        return $this->db->delete('jadwal_mahasiswa', array('id_jadwal_mahasiswa' => $id));
    }
}
