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
        $this->load->model('jadwal_model');
    }

    // Fungsi untuk menampilkan semua data jadwal mahasiswa
    public function index()
    {
        $data['jadwal_mahasiswa'] = $this->jadwalmahasiswa_model->get_jadwal_mahasiswa_by_nim($this->session->userdata('nim'));
        // Load view untuk menampilkan data jadwal mahasiswa
        $this->load->view('jadwal_mahasiswa/index', $data);
    }

    // Fungsi untuk menampilkan form tambah jadwal mahasiswa
    public function tambah()
    {
        // Ambil data mata kuliah dari model
        $data['jadwal'] = $this->jadwal_model->semua_jadwal();

        // Load view form tambah jadwal mahasiswa
        $this->load->view('jadwal_mahasiswa/tambah', $data);
    }

    // Fungsi untuk menyimpan data jadwal mahasiswa baru
    public function simpan()
    {
        // Ambil data input dari form tambah
        $data = array(
            'id_jadwal' => $this->input->post('id_jadwal'),
            'nim' => $this->session->userdata('nim'),
        );

        // Panggil model untuk menyimpan data jadwal mahasiswa baru
        $this->jadwalmahasiswa_model->tambah_jadwal_mahasiswa($data);

        // Tambahkan kode untuk menyimpan data jadwal mahasiswa baru ke dalam database
        // ...

        // Redirect kembali ke halaman index
        redirect('jadwalmahasiswa');
    }


    // Fungsi untuk mengedit data jadwal mahasiswa
    public function edit($id)
    {
        // Implementasi edit data jadwal mahasiswa
    }

    // Fungsi untuk menghapus data jadwal mahasiswa
    public function hapus($id_jadwal_mahasiswa)
    {
        // Panggil model untuk menghapus data jadwal mahasiswa berdasarkan id
        $this->jadwalmahasiswa_model->hapus_jadwal_mahasiswa($id_jadwal_mahasiswa);

        // Redirect kembali ke halaman index
        redirect('jadwalmahasiswa');
    }
}
