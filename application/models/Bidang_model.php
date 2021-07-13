<?php
    class Bidang_model extends CI_Model {
        // Mengambil data dari database
        public function getAll() {
            $this->db->order_by("id", "asc");
            $query = $this->db->get('bidang_usaha');
            return $query;
        
        }
        
        // Mengambil data berdasarkan ID
        public function getById($id){
            $query = $this->db->get_where('bidang_usaha', array('id' => $id));
            return $query; 
        }
        // Menyimpan data
        public function simpan($data){
            $sql = "INSERT INTO bidang_usaha (nama_bidang_usaha) VALUES (?)";      
            $this->db->query($sql, $data);

            $insert_id = $this->db->insert_id();
            return $this->findById($insert_id);
        }

        // Mencari data berdasarkan ID
        public function findById($id){
            $query = $this->db->get_where('bidang_usaha', array('id'=>$id));
            return $query->row();
        }

        // update table 
        public function update($data){
            $sql = "UPDATE bidang_usaha SET nama_bidang_usaha=? WHERE id=?";
            $this->db->query($sql, $data);
        }

        // Delete data di tabel 
        public function delete($data){
            $sql = "DELETE FROM bidang_usaha WHERE id=?";
            $this->db->query($sql, $data);
        }
    }