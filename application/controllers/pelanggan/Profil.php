<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfilModel');
    }

    public function index()
    {
        $data['profil'] = $this->ProfilModel->getProfil();
        $this->load->view('templates/pelanggan/profil/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/profil/index',$data); // Isi Konten Daftar Gedung dari file pelanggan/gedung/index.php
        $this->load->view('templates/pelanggan/footer'); // Untuk Menampilkan Footer
    }
}

/* End of file Controllername.php */
