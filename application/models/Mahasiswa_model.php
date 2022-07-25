<?php 
class Mahasiswa_model extends CI_model{
      public function getAllMhs()
      {
            return $this->db->get('mhasiswa')->result_array();
            
      }
}