<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gedung extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Tambahkan ini dari gedungModel.php
        $this->load->model('gedungModel');
    }

    public function index()
    {
        // Buat Variabel untuk menampung query dari gedungModel
        $result['dataprofil'] = $this->gedungModel->getAll();

        $this->load->view('templates/pelanggan/header1'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/gedung/index', $result); // Isi Konten Daftar gedung dari file pelanggan/gedung/index.php
        $this->load->view('templates/pelanggan/footer'); // Untuk Menampilkan Footer

        // echo $date = $_GET['date'];
        // $result = $this->DashboardModel->datagedung($date);
        // var_dump($result);
    }

}

/* End of file Controllername.php */
