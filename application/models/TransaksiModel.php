<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiModel extends CI_Model {

  public function getTransaction()
  {
    $this->db->select('*');
    $this->db->from('pemesanan');
    $this->db->join('pelanggan','pelanggan.pelanggan_id = pemesanan.pelanggan_id');
    $query = $this->db->get();
    return $query->result();
  }

  public function myTransaction()
  {
    $this->db->where('pelanggan_id',$this->session->userdata('user_id'));

    return $this->db->get('pemesanan');
  }

  public function getCount()
  {
    $this->db->where('pelanggan_id',$this->session->userdata('user_id'));
    return $this->db->get('pemesanan')->num_rows();
  }

  public function simpanTransaksi($data)
  {
    $this->db->insert('pemesanan',$data);
  }

  public function simpanDetailTransaksi($id_transaksi,$data)
  {
    if ($data['paket'] != null) {
      $data_paket = [
        'pemesanan_id' => $id_transaksi,
        'id_paket' => $data['paket']
      ];
      $this->db->insert('pemesanan_paket',$data_paket); //tambahan indri untuk paket
    }
  }

  public function getDataById($id)
  {
    // echo $id;
    $this->db->select('*');
    $this->db->from('pemesanan');
    $this->db->where('id_pemesanan',$id);
    $this->db->join('pelanggan','pelanggan.pelanggan_id = pemesanan.pelanggan_id','left');
    $this->db->join('pemesanan_paket','pemesanan_paket.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('paket','paket.id_paket = pemesanan_paket.id_paket','left');
    $query = $this->db->get();

    return $query->row();
  }

  public function deleteTransaksi($id)
  {
        $this->db->where('id_pemesanan',$id);
        $this->db->delete('pemesanan');

        $this->session->set_flashdata('success','Data berhasil dihapus!');
        redirect(base_url() . 'admin/pemesanan/');
  }

}

/* End of file ModelName.php */
