<?php
    class Peminat_model extends CI_Model {
        // Mengambil data dari database
        public function getAll() {
            $this->db->order_by("id", "asc");
            $query = $this->db->get('vw_peminat_lowongan');
            return $query;      
        }
        
        // Mengambil data berdasarkan ID
        public function getById($id){
            $query = $this->db->get_where('peminat_lowongan', array('id' => $id));
            return $query; 
        }
        // Menyimpan data
        public function simpan($data){
            $sql = "INSERT INTO peminat_lowongan (nim,nama_peminat,alasan,prodi_id,lowongan_id,keahlian_id) VALUES (?,?,?,?,?,?)";      
            $this->db->query($sql, $data);

            $insert_id = $this->db->insert_id();
            return $this->findById($insert_id);
        }

        // Mencari data berdasarkan ID
        public function findById($id){
            $query = $this->db->get_where('vw_peminat_lowongan', array('id'=>$id));
            return $query->row();
        }

        // update table 
        public function update($data){
            $sql = "UPDATE peminat_lowongan SET nim=?,nama_peminat=?,alasan=?,prodi_id=?,lowongan_id=?,keahlian_id=? WHERE id=?";
            $this->db->query($sql, $data);
        }

        // Delete data di tabel
        public function delete($data){
            $sql = "DELETE FROM peminat_lowongan WHERE id=?";
            $this->db->query($sql, $data);
        }
    }
?>

