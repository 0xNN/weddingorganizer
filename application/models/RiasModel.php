<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RiasModel extends CI_Model {

  public function getAll()
  {
    // Query jika diterjemahkan 
    // SELECT * FROM rias
    $query = $this->db->get('rias');

    // Lempar hasil query ke Controller Rias.php
    return $query->result();
  }

}

/* End of file ModelName.php */
