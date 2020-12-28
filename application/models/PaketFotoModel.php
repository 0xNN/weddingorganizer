<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketFotoModel extends CI_Model {

  public function getAll()
  {
    $query = $this->db->select('paket.*, list.id, list.nama_list, list.foto')
                      ->from('paket')
                      ->join('list_paket','list_paket.paket_id = paket.id_paket')
                      ->join('list','list.id = list_paket.list_id')
                      ->where('paket.id_paket', 6)
                      ->get();

    return $query->result();
  }

}

/* End of file ModelName.php */