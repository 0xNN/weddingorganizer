<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilModel extends CI_Model {

  public function getAll()
  {
    // Query jika diterjemahkan 
    // SELECT * FROM profil
    $query = $this->db->get('profil');

   
    return $query->result();
  }

}

/* End of file ModelName.php */
