<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketLengkap extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaketLengkapModel');
    }

    public function index()
    {
        $data['paketlengkap'] = $this->PaketLengkapModel->getAll();
        $this->load->view('templates/pelanggan/paket/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketlengkap/index',$data); 
        $this->load->view('templates/pelanggan/paket/footer'); // Untuk Menampilkan Footer

    }

}

/* End of file Controllername.php */
