<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mitra extends CI_Controller
{
    public function index()
    {
        $this->load->model('mitra_model');
        $data['list_mitra'] = $this->mitra_model->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('layouts/header');
        // $this->load->view('mitra/index', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('mitra/index', $data);
        $this->load->view('layouts/footer');
    }
    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('mitra/form_mitra');
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('mitra/form_mitra');
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        $this->load->model('mitra_model', 'mitra');
        $_nama_mitra = $this->input->post('nama_mitra');
        $_alamat = $this->input->post('alamat');
        $_kontak = $this->input->post('kontak');
        $_telpon = $this->input->post('telpon');
        $_email = $this->input->post('email');
        $_website = $this->input->post('web');
        $_bidang_usaha_id = $this->input->post('bidang_usaha_id');
        $_sektor_usaha_id = $this->input->post('sektor_usaha_id');
        $_idmitra = $this->input->post('idmitra');

        $data_mitra['nama_mitra'] = $_nama_mitra; //?1
        $data_mitra['alamat'] = $_alamat; //?2
        $data_mitra['kontak'] = $_kontak; //?3
        $data_mitra['telpon'] = $_telpon; //?3
        $data_mitra['email'] = $_email; //?3
        $data_mitra['web'] = $_website; //?3
        $data_mitra['bidang_usaha_id'] = $_bidang_usaha_id; //?3
        $data_mitra['sektor_usaha_id'] = $_sektor_usaha_id; //?3

        if (!empty($_idmitra)) { // update
            $data_mitra['id'] = $_idmitra;
            $this->mitra->update($data_mitra);
        } else { //data baru
            $this->mitra->simpan($data_mitra);
        }

        redirect('mitra', 'refresh');
    }

    public function edit($id)
    {
        $this->load->model('mitra_model', 'mitra');
        $baris_mitra = $this->mitra->findById($id);
        $data['objmitra'] = $baris_mitra;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('mitra/edit_mitra', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('mitra/edit_mitra', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id)
    {
        $this->load->model('mitra_model', 'mitra');
        $data_mitra['id'] = $id;
        $this->mitra->delete($data_mitra);
        redirect('mitra', 'refresh');
    }
}
