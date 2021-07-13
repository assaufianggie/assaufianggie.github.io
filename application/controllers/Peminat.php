<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Peminat extends CI_Controller
{
    public function index()
    {
        $this->load->model('peminat_model');
        $data['list_peminat'] = $this->peminat_model->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->load->view('layouts/header');
        // $this->load->view('peminat/index', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('peminat/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('peminat/form_peminat');
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('peminat/form_peminat');
        $this->load->view('layouts/footer');
    }

    public function save()
    {
        $this->load->model('peminat_model', 'peminat_lowongan');
        $_nim = $this->input->post('nim');
        $_nama_peminat = $this->input->post('nama_peminat');
        $_alasan = $this->input->post('alasan');
        $_prodi_id = $this->input->post('prodi_id');
        $_lowongan_id = $this->input->post('lowongan_id');
        $_keahlian_id = $this->input->post('keahlian_id');
        $_idpeminat = $this->input->post('idpeminat');

        $data_peminat['nim'] = $_nim; //?1
        $data_peminat['nama_peminat'] = $_nama_peminat; //?2
        $data_peminat['alasan'] = $_alasan; //?3
        $data_peminat['prodi_id'] = $_prodi_id; //?4
        $data_peminat['lowongan_id'] = $_lowongan_id; //?5
        $data_peminat['keahlian_id'] = $_keahlian_id; //?6


        if (!empty($_idpeminat)) { // update
            $data_peminat['id'] = $_idpeminat;
            $this->peminat_lowongan->update($data_peminat);
        } else { //data baru
            $this->peminat_lowongan->simpan($data_peminat);
        }
        redirect('peminat', 'refresh');
    }

    public function edit($id)
    {
        $this->load->model('peminat_model', 'peminat_lowongan');
        $baris_peminat = $this->peminat_lowongan->findById($id);
        $data['objpeminat'] = $baris_peminat;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('peminat/edit_peminat', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('peminat/edit_peminat', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id)
    {
        $this->load->model('peminat_model', 'peminat_lowongan');
        $data_peminat['id'] = $id;
        $this->peminat_lowongan->delete($data_peminat);
        redirect('peminat', 'refresh');
    }
}
