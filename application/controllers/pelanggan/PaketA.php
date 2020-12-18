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
    
        $this->load->view('templates/pelanggan/header1'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketa/index'); 
        $this->load->view('templates/pelanggan/footer'); // Untuk Menampilkan Footer

    }

}

/* End of file Controllername.php */
