<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('templates/pelanggan/tentang/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/tentang/index'); // Isi Konten Daftar Gedung dari file pelanggan/gedung/index.php
        $this->load->view('templates/pelanggan/footer'); // Untuk Menampilkan Footer

        // echo $date = $_GET['date'];
        // $result = $this->DashboardModel->dataGedung($date);
        // var_dump($result);
    }

}

/* End of file Controllername.php */
