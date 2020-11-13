<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

  public function dataGedung($tanggal)
  {
    $query = $this->db->select('*, gedung.gedung_id')
                      ->from('gedung')
                      ->join('pemesanan_gedung','pemesanan_gedung.gedung_id = gedung.gedung_id','left')
                      ->join('pemesanan','pemesanan.id_pemesanan = pemesanan_gedung.pemesanan_id','left')
                      ->where('tgl_acara !=',$tanggal)
                      ->or_where('tgl_acara',null)
                      ->get();

    return $query->result();
  }

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

  public function dataLaporan()
  {
    $query = $this->db->select('*')
                      ->from('pegawai')
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
    $this->db->join('pelanggan','pelanggan_id = pemesanan.user_id','left');
    $this->db->join('pemesanan_dekorasi','pemesanan_dekorasi.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_rias','pemesanan_rias.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_dokumentasi','pemesanan_dokumentasi.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_gedung','pemesanan_gedung.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_katering','pemesanan_katering.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_paket','pemesanan_paket.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('gedung','gedung.gedung_id = pemesanan_gedung.gedung_id','left');
    $this->db->join('dekorasi','dekorasi.dekorasi_id = pemesanan_dekorasi.dekorasi_id','left');
    $this->db->join('rias','rias.rias_id = pemesanan_rias.rias_id','left');
    $this->db->join('katering','katering.katering_id = pemesanan_katering.katering_id','left');
    $this->db->join('dokumentasi','dokumentasi.dokumentasi_id = pemesanan_dokumentasi.dokumentasi_id','left');
    $this->db->join('paket','paket.id_paket = pemesanan_paket.id_paket','left');
    $query = $this->db->get();

    return $query->result();
  }

}


/* End of file ModelName.php */
