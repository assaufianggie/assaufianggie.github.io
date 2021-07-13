<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keahlian extends CI_Controller
{
    public function index()
    {
        $this->load->model('keahlian_model', 'keahlian');
        $data['list_keahlian'] = $this->keahlian->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('keahlian/index', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('keahlian/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('keahlian/form_keahlian');
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('keahlian/form_keahlian');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('keahlian_model', 'keahlian');
        $_nama_keahlian = $this->input->post('nama_keahlian');
        $_idkeahlian = $this->input->post('idkeahlian');

        $data_keahlian['nama_keahlian'] = $_nama_keahlian; //?1


        if (!empty($_idlowongan)) { // update
            $data_keahlian['id'] = $_idlowongan;
            $this->keahlian->update($data_keahlian);
        } else { //data baru
            $this->keahlian->simpan($data_keahlian);
        }

        redirect('keahlian', 'refresh');
    }


    public function edit($id)
    {
        $this->load->model('keahlian_model', 'keahlian');
        $baris_keahlian = $this->keahlian->findById($id);
        $data['objkeahlian'] = $baris_keahlian;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('keahlian/edit_keahlian', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('keahlian/edit_keahlian', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id)
    {
        $this->load->model('keahlian_model', 'keahlian');
        $data_keahlian['id'] = $id;
        $this->keahlian->delete($data_keahlian);
        redirect('keahlian', 'refresh');
    }
}
