<?php
    class Lowongan_model extends CI_Model {
        // Mengambil data dari database
        public function getAll() {
            $this->db->order_by("id", "asc");
            $query = $this->db->get('vw_lowongan');
            return $query;
        
        }
        
        // Mengambil data berdasarkan ID
        public function getById($id){
            $query = $this->db->get_where('lowongan', array('id' => $id));
            return $query; 
        }
        // Menyimpan data
        public function simpan($data){
            $sql = "INSERT INTO lowongan (deskripsi_pekerjaan,tanggal_akhir,mitra_id) VALUES (?,?,?)";      
            $this->db->query($sql, $data);

            $insert_id = $this->db->insert_id();
            return $this->findById($insert_id);
        }

        // Mencari data berdasarkan ID
        public function findById($id){
            $query = $this->db->get_where('lowongan', array('id'=>$id));
            return $query->row();
        }

        // update table lowongan
        public function update($data){
            $sql = "UPDATE lowongan SET deskripsi_pekerjaan=?,tanggal_akhir=?,mitra_id=? WHERE id=?";
            $this->db->query($sql, $data);
        }

        // Delete data di tabel lowongan
        public function delete($data){
            $sql = "DELETE FROM lowongan WHERE id=?";
            $this->db->query($sql, $data);
        }
    }