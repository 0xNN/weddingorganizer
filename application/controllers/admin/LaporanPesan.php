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

    public function print($month, $year)
    {
        $pdf = new FPDF('L', 'mm','Letter');

        $pdf->AddPage();

        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'LAPORAN PEMESANAN WEDDING ORGANIZER SALON BUNDA FITRY',0,1,'C');
        $pdf->Cell(10,7,'',0,1,'C');

        $pdf->SetFont('Arial','B',10);
		$pdf->SetFillColor(69, 171, 82);
        $pdf->SetLineWidth(.3);
        $pdf->SetFont('','B');
        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(35,6,'Kode',1,0,'C');
        $pdf->Cell(45,6,'Nama',1,0,'C');
        $pdf->Cell(40,6,'No Telp',1,0,'C');
        $pdf->Cell(50,6,'Paket',1,0,'C');
        $pdf->Cell(35,6,'Tanggal Acara',1,0,'C');
        $pdf->Cell(45,6,'Harga',1,1,'C');

        $pdf->SetFillColor(224,235,255);
		$pdf->SetTextColor(0);
        $pdf->SetFont('Arial','',10);
        $pemesanans = $this->DashboardModel->printLaporanPemesanan($month, $year);
        $no=0;
        $total=0;
        foreach ($pemesanans as $data){
            $pdf->Cell(8,6,$no+1,1,0,'C');
            $pdf->Cell(35,6,"#".$data->id_pemesanan,1,0);
            $pdf->Cell(45,6,$data->nama,1,0);
            $pdf->Cell(40,6,$data->no_telp,1,0);
            $pdf->Cell(50,6,$data->nama_paket,1,0);
            $pdf->Cell(35,6,$data->tgl_acara,1,0);
            $pdf->Cell(45,6,"RP. ".number_format($data->harga_paket,0),1,1);
            $total += $data->harga_paket;
            $no++;
        }
        
        $pdf->SetFillColor(224,235,255);
        $pdf->SetTextColor(0);
        $pdf->SetLineWidth(.3);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(213,6,'Total',1,0,'C');
        $pdf->Cell(45,6,"RP. ".number_format($total,0),1,1,'L');
        // Go to 1.5 cm from bottom
        $pdf->SetX(10);
        // Select Arial italic 8
        $pdf->SetFont('Arial','I',8);
        // Print centered page number
        $pdf->Cell(0,10,date("j F, Y"),0,0,'R');


        $pdf->Output('I','laporan_pemesanan.pdf');
    }

}

/* End of file Controllername.php */