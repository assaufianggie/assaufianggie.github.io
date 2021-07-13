<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prodi extends CI_Controller
{

    public function index()
    {
        $this->load->model('prodi_model', 'prodi');
        $data['list_prodi'] = $this->prodi->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('prodi/index', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('prodi/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('prodi/form_prodi');
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('prodi/form_prodi');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('prodi_model', 'prodi');
        $_kode = $this->input->post('kode');
        $_nama_prodi = $this->input->post('nama_prodi');
        $_idprodi = $this->input->post('idprodi');


        $data_prodi['kode'] = $_kode; //?1
        $data_prodi['nama_prodi'] = $_nama_prodi; //?2

        if (!empty($_idprodi)) { // update
            $data_prodi['id'] = $_idprodi;
            $this->prodi->update($data_prodi);
        } else { //data baru
            $this->prodi->simpan($data_prodi);
        }

        redirect('prodi', 'refresh');
    }


    public function edit($id)
    {
        $this->load->model('prodi_model', 'prodi');
        $baris_prodi = $this->prodi->findById($id);
        $data['objprodi'] = $baris_prodi;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('prodi/edit_prodi', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('prodi/edit_prodi', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id)
    {
        $this->load->model('prodi_model', 'prodi');
        $data_prodi['id'] = $id;
        $this->prodi->delete($data_prodi);
        redirect('prodi', 'refresh');
    }
}
