<?php
class Mahasiswa extends CI_Controller{
      public function __construct()
      {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
            
      }
      public function index(){
            $data['judul'] = "Mahaiswa";
            $data['mahasiswa'] = $this->Mahasiswa_model->getAllMhs();
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/index',$data);
            $this->load->view('template/footer');

      }

}
