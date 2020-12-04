<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketFotoModel extends CI_Model {

  public function getAll()
  {
    
    $query = $this->db->get('paketfoto');


    return $query->result();
  }

}

/* End of file ModelName.php */