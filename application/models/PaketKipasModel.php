<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketKipasModel extends CI_Model {

  public function getAll()
  {
    
    $query = $this->db->get('paketkipas');


    return $query->result();
  }

}

/* End of file ModelName.php */