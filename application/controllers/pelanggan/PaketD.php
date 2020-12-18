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
    
        $this->load->view('templates/pelanggan/header1'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketd/index'); 
        $this->load->view('templates/pelanggan/footer'); // Untuk Menampilkan Footer

    }

}

/* End of file Controllername.php */
