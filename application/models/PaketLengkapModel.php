<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketLengkapModel extends CI_Model {

  public function getAll()
  {
    
    $query = $this->db->get('paketlengkap');


    return $query->result();
  }

}

/* End of file ModelName.php */
