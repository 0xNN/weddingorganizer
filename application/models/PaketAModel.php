<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketAModel extends CI_Model {

  public function getAll()
  {
    
    $query = $this->db->get('paketa');


    return $query->result();
  }

}

/* End of file ModelName.php */
