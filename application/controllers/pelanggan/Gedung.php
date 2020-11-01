<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Tambahkan ini dari GedungModel.php
        $this->load->model('GedungModel');
    }

    public function index()
    {
        // Buat Variabel untuk menampung query dari GedungModel
        $result['dataGedung'] = $this->GedungModel->getAll();

        $this->load->view('templates/pelanggan/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/gedung/index', $result); // Isi Konten Daftar Gedung dari file pelanggan/gedung/index.php
        $this->load->view('templates/pelanggan/footer'); // Untuk Menampilkan Footer

        // echo $date = $_GET['date'];
        // $result = $this->DashboardModel->dataGedung($date);
        // var_dump($result);
    }

}

/* End of file Controllername.php */
