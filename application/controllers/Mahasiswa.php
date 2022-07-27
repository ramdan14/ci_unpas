<?php
class Mahasiswa extends CI_Controller{
      public function __construct()
      {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
            $this->load->library('form_validation');
            
      }
      public function index(){
            $data['judul'] = "Mahaiswa";
            $data['mahasiswa'] = $this->Mahasiswa_model->getAllMhs();
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/index',$data);
            $this->load->view('template/footer');

      }
      public function tambah()
      {
            $data['judul'] = "Tambah";
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('nrp', 'Nrp', 'required|numeric');
            $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            if ($this->form_validation->run() == FALSE)
            {
                  $this->load->view('template/header',$data);
                  $this->load->view('mahasiswa/tambah',$data);
                  $this->load->view('template/footer',$data);
            }else {

                  $this->Mahasiswa_model->tambahDataMhs();
                  $this->session->set_flashdata('flash','ditambahkan');
                  redirect('mahasiswa');
            }
      }

      public function hapus($id)
      {
            $this->Mahasiswa_model->hapus($id);
            $this->session->set_flashdata('flash','dihapus');
            redirect('mahasiswa');

      }

}
