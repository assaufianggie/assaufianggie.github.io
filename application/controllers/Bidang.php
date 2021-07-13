<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bidang extends CI_Controller
{
    public function index()
    {
        $this->load->model('bidang_model', 'bidang_usaha');
        $data['list_bidang'] = $this->bidang_usaha->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('bidang/index', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('bidang/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('bidang/form_bidang');
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('bidang/form_bidang');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('bidang_model', 'bidang_usaha');
        $_nama_bidang_usaha = $this->input->post('nama_bidang_usaha');
        $_idbidang = $this->input->post('idbidang');

        $data_bidang['nama_bidang_usaha'] = $_nama_bidang_usaha; //?1


        if (!empty($_idbidang)) { // update
            $data_bidang['id'] = $_idbidang;
            $this->bidang_usaha->update($data_bidang);
        } else { //data baru
            $this->bidang_usaha->simpan($data_bidang);
        }

        redirect('bidang', 'refresh');
    }


    public function edit($id)
    {
        $this->load->model('bidang_model', 'bidang_usaha');
        $baris_bidang = $this->bidang_usaha->findById($id);
        $data['objbidang'] = $baris_bidang;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('bidang/edit_bidang', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('bidang/edit_bidang', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id)
    {
        $this->load->model('bidang_model', 'bidang_usaha');
        $data_bdiang['id'] = $id;
        $this->bidang_usaha->delete($data_bdiang);
        redirect('bidang', 'refresh');
    }
}
