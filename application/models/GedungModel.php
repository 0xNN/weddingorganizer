<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GedungModel extends CI_Model {

  public function getAll()
  {
    // Query jika diterjemahkan 
    // SELECT * FROM gedung
    $query = $this->db->get('profil');

    // Lempar hasil query ke Controller Gedung.php
    return $query->result();
  }

}

/* End of file ModelName.php */
