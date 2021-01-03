<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KonfirmasiModel extends CI_Model {

  public function getConfirmation()
  {
    $this->db->select('*');
    $this->db->from('bukti_bayar');
    $this->db->join('pelanggan','pelanggan.pelanggan_id = bukti_bayar.pelanggan_id','left');
    $this->db->join('pemesanan','pemesanan.id_pemesanan = bukti_bayar.pemesanan_id','left');
    $query = $this->db->get();
    return $query->result();
  }

}

/* End of file ModelName.php */
