<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    // Constructor
    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi untuk menambahkan data user baru
    public function tambah_user($data)
    {
        return $this->db->insert('users', $data);
    }

    // Fungsi untuk mengambil semua data user
    public function semua_users()
    {
        return $this->db->get('users')->result_array();
    }

    // Fungsi untuk mengambil data user berdasarkan ID
    public function get_user_by_id($id)
    {
        return $this->db->get_where('users', array('id_user' => $id))->row_array();
    }

    // Fungsi untuk mengupdate data user
    public function update_user($id, $data)
    {
        $this->db->where('id_user', $id);
        return $this->db->update('users', $data);
    }

    // Fungsi untuk menghapus data user
    public function hapus_user($id)
    {
        return $this->db->delete('users', array('id_user' => $id));
    }

    // Fungsi untuk memeriksa keberadaan user berdasarkan username
    public function cek_username($username)
    {
        return $this->db->get_where('users', array('username' => $username))->row_array();
    }
}
