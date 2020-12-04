<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketBModel extends CI_Model {

  public function getAll()
  {
    
    $query = $this->db->get('paketb');


    return $query->result();
  }

}

/* End of file ModelName.php */
