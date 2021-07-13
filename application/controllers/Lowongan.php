<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Lowongan extends CI_Controller
{
    // public function index(){
    //     $this->load->model('lowongan_model');
    //     $data['list_lowongan'] = $this->lowongan_model->joinTable_lowongan();

    //     $this->load->view('layouts/header');
    //     $this->load->view('lowongan/index', $data);
    //     $this->load->view('layouts/footer');
    //}

    public function index()
    {
        $this->load->model('lowongan_model', 'lowongan');
        $data['list_lowongan'] = $this->lowongan->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('lowongan/index', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('lowongan/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('lowongan/form_lowongan');
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('lowongan/form_lowongan');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('lowongan_model', 'lowongan');
        $_desk_pekerjaan = $this->input->post('deskripsi_pekerjaan');
        $_tgl_akhir = $this->input->post('tanggal_akhir');
        $_mitra_id = $this->input->post('mitra_id');
        $_idlowongan = $this->input->post('idlowongan');

        $data_lowongan['deskripsi_pekerjaan'] = $_desk_pekerjaan; //?1
        $data_lowongan['tanggal_akhir'] = $_tgl_akhir; //?2
        $data_lowongan['mitra_id'] = $_mitra_id; //?3

        if (!empty($_idlowongan)) { // update
            $data_lowongan['id'] = $_idlowongan;
            $this->lowongan->update($data_lowongan);
        } else { //data baru
            $this->lowongan->simpan($data_lowongan);
        }

        redirect('lowongan', 'refresh');
    }


    public function edit($id)
    {
        $this->load->model('lowongan_model', 'lowongan');
        $baris_lowongan = $this->lowongan->findById($id);
        $data['objlowongan'] = $baris_lowongan;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('lowongan/edit_lowongan', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('lowongan/edit_lowongan', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id)
    {
        $this->load->model('lowongan_model', 'lowongan');
        $data_lowongan['id'] = $id;
        $this->lowongan->delete($data_lowongan);
        redirect('lowongan', 'refresh');
    }
}
