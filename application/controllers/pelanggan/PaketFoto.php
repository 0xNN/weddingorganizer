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
    
        //$this->load->view('templates/pelanggan/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketfoto/index'); 
        $this->load->view('templates/pelanggan/footer'); // Untuk Menampilkan Footer

    }

}

/* End of file Controllername.php */
