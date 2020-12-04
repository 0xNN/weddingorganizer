<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketDModel extends CI_Model {

  public function getAll()
  {
    
    $query = $this->db->get('paketd');


    return $query->result();
  }

}

/* End of file ModelName.php */