<?php
    class Keahlian_model extends CI_Model {
        // Mengambil data dari database
        public function getAll() {
            $this->db->order_by("id", "asc");
            $query = $this->db->get('keahlian');
            return $query;
        
        }
        
        // Mengambil data berdasarkan ID
        public function getById($id){
            $query = $this->db->get_where('keahlian', array('id' => $id));
            return $query; 
        }
        // Menyimpan data
        public function simpan($data){
            $sql = "INSERT INTO keahlian (nama_keahlian) VALUES (?)";      
            $this->db->query($sql, $data);

            $insert_id = $this->db->insert_id();
            return $this->findById($insert_id);
        }

        // Mencari data berdasarkan ID
        public function findById($id){
            $query = $this->db->get_where('keahlian', array('id'=>$id));
            return $query->row();
        }

        // update table 
        public function update($data){
            $sql = "UPDATE keahlian SET nama_keahlian=? WHERE id=?";
            $this->db->query($sql, $data);
        }

        // Delete data di tabel lowongan
        public function delete($data){
            $sql = "DELETE FROM keahlian WHERE id=?";
            $this->db->query($sql, $data);
        }
    }