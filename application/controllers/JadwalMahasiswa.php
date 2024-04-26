<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JadwalMahasiswa extends CI_Controller
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
        // Load model jadwal mahasiswa
        $this->load->model('jadwalmahasiswa_model');
    }

    // Fungsi untuk menampilkan semua data jadwal mahasiswa
    public function index()
    {
        $data['jadwal_mahasiswa'] = $this->jadwalmahasiswa_model->semua_jadwal_mahasiswa();
        // Load view untuk menampilkan data jadwal mahasiswa
        $this->load->view('jadwal_mahasiswa/index', $data);
    }

    // Fungsi untuk menambahkan data jadwal mahasiswa baru
    public function tambah()
    {
        // Implementasi tambah data jadwal mahasiswa
    }

    // Fungsi untuk mengedit data jadwal mahasiswa
    public function edit($id)
    {
        // Implementasi edit data jadwal mahasiswa
    }

    // Fungsi untuk menghapus data jadwal mahasiswa
    public function hapus($id)
    {
        // Implementasi hapus data jadwal mahasiswa
    }
}
