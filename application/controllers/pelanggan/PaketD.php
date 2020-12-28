<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketD extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaketDModel');
    }

    public function index()
    {
        $data['paketd'] = $this->PaketDModel->getAll();
        $this->load->view('templates/pelanggan/paket/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketd/index', $data); 
        $this->load->view('templates/pelanggan/paket/footer'); // Untuk Menampilkan Footer
    }
}

/* End of file Controllername.php */
