<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketFoto extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaketFotoModel');
    }

    public function index()
    {
        $data['paketfoto'] = $this->PaketFotoModel->getAll();
        $this->load->view('templates/pelanggan/paket/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketfoto/index', $data); 
        $this->load->view('templates/pelanggan/paket/footer'); // Untuk Menampilkan Footer
    }
}

/* End of file Controllername.php */
