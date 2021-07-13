<?php
    class Prodi_model extends CI_Model {
        // Mengambil data dari database
        public function getAll() {
            $this->db->order_by("id", "asc");
            $query = $this->db->get('prodi');
            return $query;
        
        }
        
        public function getById($id){
            $query = $this->db->get_where('prodi', array('id' => $id));
            return $query; 
        }
        // Menyimpan data
        public function simpan($data){
            $sql = "INSERT INTO prodi (kode,nama_prodi) VALUES (?,?)";      
            $this->db->query($sql, $data);

            $insert_id = $this->db->insert_id();
            return $this->findById($insert_id);
        }

        // Mencari data berdasarkan ID
        public function findById($id){
            $query = $this->db->get_where('prodi', array('id'=>$id));
            return $query->row();
        }

        // update table 
        public function update($data){
            $sql = "UPDATE prodi SET kode=?,nama_prodi=? WHERE id=?";
            $this->db->query($sql, $data);
        }

        // Delete data di tabel 
        public function delete($data){
            $sql = "DELETE FROM prodi WHERE id=?";
            $this->db->query($sql, $data);
        }
    }