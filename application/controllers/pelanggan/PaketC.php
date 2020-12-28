<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketC extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaketCModel');
    }

    public function index()
    {
        $data['paketc'] = $this->PaketCModel->getAll();
        $this->load->view('templates/pelanggan/paket/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketc/index', $data); 
        $this->load->view('templates/pelanggan/paket/footer'); // Untuk Menampilkan Footer

    }

}

/* End of file Controllername.php */
