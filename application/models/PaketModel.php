<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketModel extends CI_Model {

  public function getAll()
  {
    // Query jika diterjemahkan 
    // SELECT * FROM paket
   $query = $this->db->get('paket');

   
    return $query->result();
  }

}

/* End of file ModelName.php */
