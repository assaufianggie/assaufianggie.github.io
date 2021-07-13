<?php
    class Mitra_model extends CI_Model {
        // Mengambil seluruh data
        public function getAll() {
            $this->db->order_by("id", "asc");
            $query = $this->db->get('vw_mitra');
            return $query;
        }

        // Mengambil data berdasarkan ID
        public function getById($id){
            $query = $this->db->get_where('mitra', array('id' => $id));
            return $query; 
        }

        // Menyimpan data
        public function simpan($data){
            $sql = "INSERT INTO mitra (nama_mitra,alamat,kontak,telpon,email,web,bidang_usaha_id,sektor_usaha_id) VALUES (?,?,?,?,?,?,?,?)";      
            $this->db->query($sql, $data);

            $insert_id = $this->db->insert_id();
            return $this->findById($insert_id);
        }

        // Mencari data berdasarkan ID
        public function findById($id){
            $query = $this->db->get_where('mitra', array('id'=>$id));
            return $query->row();
        }

        // update table lowongan
        public function update($data){
            $sql = "UPDATE mitra SET nama_mitra=?,alamat=?,kontak=?,telpon=?,email=?,web=?,bidang_usaha_id=?,sektor_usaha_id=? WHERE id=?";
            $this->db->query($sql, $data);
        }

        // Delete data di tabel lowongan
        public function delete($data){
            $sql = "DELETE FROM mitra WHERE id=?";
            $this->db->query($sql, $data);
        }
    }    

    

        // public function joinTable() {
        //     $this->db->order_by('bidang_usaha_id','sektor_usaha_id');
        //     return $this->db->from('mitra')
        //     ->join('bidang_usaha','bidang_usaha.id = mitra.bidang_usaha_id')
        //     ->join('sektor_usaha', 'sektor_usaha.id = mitra.sektor_usaha_id')
        //     ->get()
        //     ->result();
        // }
        // public function joinTable() {
        //     $this->db->order_by('bidang_usaha_id','sektor_usaha_id');
        //     return $this->db->from('mitra')->join('bidang_usaha','sektor_usaha','bidang_usaha.id.sektor_usaha.id = mitra.bidang_usaha_id.sektor_usaha_id')->get()->result();
        // }
        // public function joinTable(){
        
        //     $this->db->order_by('keahlian_id','lowongan_id','ASC');
        //     return $this->db->from('lowongan_keahlian')->join('keahlian','lowongan','keahlian.id.lowongan.id=lowongan_keahlian.keahlian_id.lowongan_id')->get()->result();
        // }
    

    