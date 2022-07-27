<?php 
class Mahasiswa_model extends CI_model{
      public function getAllMhs()
      {
            return $this->db->get('mhasiswa')->result_array();
            
      }
      public function tambahDataMhs()
      {
            $data = array(
                  'nama' => $this->input->post('nama', TRUE),
                  'nrp' => $this->input->post('nrp', TRUE),
                  'jurusan' => $this->input->post('jurusan', TRUE),
                  'email' => $this->input->post('email', TRUE),
          );
          
          $this->db->insert('mhasiswa', $data);
          // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
      }
      public function hapus($id)
      {
            $this->db->where('id', $id);
            $this->db->delete('mhasiswa');

            // Produces:
            // DELETE FROM mytable
            // WHERE id = $id
      }
}