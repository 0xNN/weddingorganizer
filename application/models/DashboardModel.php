<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

  public function dataDekorasi($tanggal)
  {
    $query = $this->db->select('*, dekorasi.dekorasi_id')
                      ->from('dekorasi')
                      ->join('pemesanan_dekorasi','pemesanan_dekorasi.dekorasi_id = dekorasi.dekorasi_id','left')
                      ->join('pemesanan','pemesanan.id_pemesanan = pemesanan_dekorasi.pemesanan_id','left')
                      ->where('tgl_acara',null)
                      ->or_where('tgl_acara !=',$tanggal)
                      ->get();

    return $query->result();
  }

  public function dataLaporanPelanggan()
  {
    $query = $this->db->select('*')
                      ->from('pelanggan')
                      ->get();

    return $query->result();
  }

  public function dataLaporanPemesanan()
  {
    $this->db->select('*');
    $this->db->from('pemesanan');
    $this->db->join('pelanggan','pelanggan.pelanggan_id = pemesanan.pelanggan_id','left');
    $this->db->join('pemesanan_paket','pemesanan_paket.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('paket','paket.id_paket = pemesanan_paket.id_paket','left');
    $query = $this->db->get();

    return $query->result();
  }

  public function dataLaporanTahunan($tahun) {
    $query = $this->db->select("*")
      ->from('pemesanan')
      ->where('tgl_acaran',$tahun)
      ->get();

    return $query->result();
  }

  public function paketLengkap()
  {
    $query = $this->db->select('*')
                      ->from('paket')
                      ->where('id_paket',1)
                      ->get();

    return $query->result();
  }

  public function paketA()
  {
    $query = $this->db->select('*')
                      ->from('paket')
                      ->where('id_paket',2)
                      ->get();

    return $query->result();
  }

  public function paketB()
  {
    $query = $this->db->select('*')
                      ->from('paket')
                      ->where('id_paket',3)
                      ->get();

    return $query->result();
  }

  public function paketC()
  {
    $query = $this->db->select('*')
                      ->from('paket')
                      ->where('id_paket',4)
                      ->get();

    return $query->result();
  }
  public function paketD()
  {
    $query = $this->db->select('*')
                      ->from('paket')
                      ->where('id_paket',5)
                      ->get();

    return $query->result();
  }
  public function paketFoto()
  {
    $query = $this->db->select('*')
                      ->from('paket')
                      ->where('id_paket',6)
                      ->get();

    return $query->result();
  }

  public function paketKipas()
  {
    $query = $this->db->select('*')
                      ->from('paket')
                      ->where('id_paket',7)
                      ->get();

    return $query->result();
  }
}


/* End of file ModelName.php */
