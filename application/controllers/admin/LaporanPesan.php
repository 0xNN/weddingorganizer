<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporanpesan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('DashboardModel');
    }

    public function index()
    {
        $data['pemesanans'] = $this->DashboardModel->dataLaporanPemesanan();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/laporan/laporan_pesan/index',$data);
        $this->load->view('templates/admin/footer');
    }

}



/* End of file Controllername.php */
