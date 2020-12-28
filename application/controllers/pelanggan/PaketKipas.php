<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketKipas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        
        $this->load->model('PaketKipasModel');
    }

    public function index()
    {
        $data['paketkipas'] = $this->PaketKipasModel->getAll();
        $this->load->view('templates/pelanggan/paket/header'); // Untuk Menampilkan Header
        $this->load->view('pelanggan/paketkipas/index',$data); 
        $this->load->view('templates/pelanggan/paket/footer'); // Untuk Menampilkan Footer

    }

}

/* End of file Controllername.php */
