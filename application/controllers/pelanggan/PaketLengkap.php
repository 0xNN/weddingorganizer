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
    
        //$this->load->view('templates/pelanggan/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketlengkap/index'); 
        $this->load->view('templates/pelanggan/footer'); // Untuk Menampilkan Footer

    }

}

/* End of file Controllername.php */
