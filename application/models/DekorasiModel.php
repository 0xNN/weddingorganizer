<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DekorasiModel extends CI_Model {

  public function getAll()
  {
    // Query jika diterjemahkan 
    // SELECT * FROM dekorasi
    $query = $this->db->get('dekorasi');

   
    return $query->result();
  }

}

/* End of file ModelName.php */
