<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index()
    {
        $this->load->model('mahasiswa_model');

        $data['title']='List Mahasiswa';
        $data['mahasiswa']=$this->mahasiswa_model->getAllmahasiswa();
        $this->load->view('template/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('template/footer');

    }

}

/* End of file Controllername.php */
?>
