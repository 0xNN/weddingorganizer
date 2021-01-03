<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporanpesan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('DashboardModel');
        $this->load->library('cetak_pdf');
    }

    public function index()
    {
        $data['pemesanans'] = $this->DashboardModel->dataLaporanPemesanan();

        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/laporan/laporan_pesan/index',$data);
        $this->load->view('templates/admin/footer');
    }

    public function print()
    {
        $pdf = new FPDF('P', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'LAPORAN PEMESANAN',0,1,'C');
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(42,6,'Kode',1,0,'C');
        $pdf->Cell(45,6,'Nama',1,0,'C');
        $pdf->Cell(40,6,'No Telp',1,0,'C');
        $pdf->Cell(50,6,'Paket',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $pemesanans = $this->DashboardModel->dataLaporanPemesanan();
        $no=0;
        foreach ($pemesanans as $data){
            $pdf->Cell(8,6,$no+1,1,0,'C');
            $pdf->Cell(42,6,"#".$data->id_pemesanan,1,0);
            $pdf->Cell(45,6,$data->nama,1,0);
            $pdf->Cell(40,6,$data->no_telp,1,0);
            $pdf->Cell(50,6,$data->nama_paket,1,1);
            $no++;
        }
        $pdf->Output('I','laporan_pemesanan.pdf');
    }

}

/* End of file Controllername.php */