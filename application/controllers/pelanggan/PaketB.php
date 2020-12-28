<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketB extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaketBModel');
    }

    public function index()
    {
        $data['paketb'] = $this->PaketBModel->getAll();
        $this->load->view('templates/pelanggan/paket/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketb/index', $data); 
        $this->load->view('templates/pelanggan/paket/footer'); // Untuk Menampilkan Footer
    }
}

/* End of file Controllername.php */
