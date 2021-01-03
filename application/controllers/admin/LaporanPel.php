<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporanpel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('DashboardModel');
        $this->load->library('cetak_pdf');
    }

    public function index()
    {
        $data['pelanggans'] = $this->DashboardModel->dataLaporanPelanggan();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/laporan/laporan_pelanggan/index',$data);
        $this->load->view('templates/admin/footer');
    }

    public function print()
    {
        $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'LAPORAN DATA PELANGGAN',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(42,6,'Nama',1,0,'C');
        $pdf->Cell(35,6,'No Telp',1,0,'C');
        $pdf->Cell(60,6,'Alamat',1,0,'C');
        $pdf->Cell(50,6,'Email',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $pelanggans = $this->DashboardModel->dataLaporanPelanggan();
        $no=0;
        foreach ($pelanggans as $data){
            $pdf->Cell(8,6,$no+1,1,0,'C');
            $pdf->Cell(42,6,$data->nama,1,0);
            $pdf->Cell(35,6,$data->no_telp,1,0);
            $pdf->Cell(60,6,$data->alamat,1,0);
            $pdf->Cell(50,6,$data->email,1,1);
            $no++;
        }
        $pdf->Output('I','laporan_pelanggan.pdf');
    }

}



/* End of file Controllername.php */
