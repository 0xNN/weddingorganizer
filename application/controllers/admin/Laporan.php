<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('DashboardModel');
    }

    public function index()
    {
        $data['pegawais'] = $this->DashboardModel->dataLaporan();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/laporan/index',$data);
        $this->load->view('templates/admin/footer');
    }

}



/* End of file Controllername.php */
