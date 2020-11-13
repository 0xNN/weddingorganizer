<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporanpel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('DashboardModel');
    }

    public function index()
    {
        $data['pelanggans'] = $this->DashboardModel->dataLaporanPelanggan();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/laporan/laporan_pelanggan/index',$data);
        $this->load->view('templates/admin/footer');
    }

}



/* End of file Controllername.php */
