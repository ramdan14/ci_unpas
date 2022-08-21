<?php
class Upload extends CI_Controller
{

   public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
  
  public function index(){
            $data['judul'] = "upload";

          
            
            $this->load->view('template/header',$data);
            $this->load->view('mahasiswa/upload_form',$data);
            $this->load->view('template/footer');
            
      }

      public function tambah()
      {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                

                $this->load->library('upload', $config);
             
              if ( !$this->upload->do_upload('gambar'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        var_dump ($error);
                }else
                {
                $waktu = time();
                $gambar_name = $this->upload->data('file_name');
                
                 
                }
          
      }


}
