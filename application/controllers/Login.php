<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
        // Load model user
        $this->load->model('User_model');
    }

    // Fungsi untuk menampilkan halaman login
    public function index()
    {
        // Jika pengguna sudah login, arahkan ke halaman lain
        if ($this->session->userdata('logged_in')) {
            redirect('jadwalmahasiswa');
        }
        // Load view login
        $this->load->view('login');
    }

    // Fungsi untuk melakukan proses login
    public function login_process()
    {
        // Ambil data input dari form login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Cek apakah username dan password cocok dengan data di database
        $user = $this->User_model->get_user_by_username($username);
        if ($user && $password == $user['password']) {
            // Jika cocok, buat sesi login
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $user['username']);
            $this->session->set_userdata('nama', $user['nama']);
            $this->session->set_userdata('nim', $user['nim']);
            redirect('jadwalmahasiswa');
        } else {
            // Jika tidak cocok, tampilkan pesan error
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('login');
        }
    }

    // Fungsi untuk melakukan proses logout
    public function logout()
    {
        // Hapus semua data sesi
        $this->session->sess_destroy();
        redirect('login');
    }
}
