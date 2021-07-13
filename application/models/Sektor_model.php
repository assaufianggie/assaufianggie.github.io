<?php
    class Sektor_model extends CI_Model {
        // Mengambil data dari database
        public function getAll() {
            $this->db->order_by("id", "asc");
            $query = $this->db->get('sektor_usaha');
            return $query;
        
        }
        
        // Mengambil data berdasarkan ID
        public function getById($id){
            $query = $this->db->get_where('sektor_usaha', array('id' => $id));
            return $query; 
        }
        // Menyimpan data
        public function simpan($data){
            $sql = "INSERT INTO sektor_usaha (nama_sektor_usaha) VALUES (?)";      
            $this->db->query($sql, $data);

            $insert_id = $this->db->insert_id();
            return $this->findById($insert_id);
        }

        // Mencari data berdasarkan ID
        public function findById($id){
            $query = $this->db->get_where('sektor_usaha', array('id'=>$id));
            return $query->row();
        }

        // update table 
        public function update($data){
            $sql = "UPDATE sektor_usaha SET nama_sektor_usaha=? WHERE id=?";
            $this->db->query($sql, $data);
        }

        // Delete data di tabel 
        public function delete($data){
            $sql = "DELETE FROM sektor_usaha WHERE id=?";
            $this->db->query($sql, $data);
        }
    }