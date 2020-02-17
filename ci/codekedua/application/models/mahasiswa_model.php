<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Controller {

    public function getAllmahasiswa()
    {
       return $this->db->get('mahasiswa')->result_array(); 
    }

}

/* End of file Controllername.php */
?>
