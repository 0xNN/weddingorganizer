<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketA extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaketAModel');
    }

    public function index()
    {
        $data['paketa'] = $this->PaketAModel->getAll();
        $this->load->view('templates/pelanggan/paket/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketa/index', $data);
        $this->load->view('templates/pelanggan/paket/footer'); // Untuk Menampilkan Footer
    }

}

/* End of file Controllername.php */
