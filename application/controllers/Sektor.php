<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sektor extends CI_Controller
{
    public function index()
    {
        $this->load->model('sektor_model', 'sektor_usaha');
        $data['list_sektor'] = $this->sektor_usaha->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('sektor/index', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('sektor/index', $data);
        $this->load->view('layouts/footer');
    }

    public function create()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('sektor/form_sektor');
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('sektor/form_sektor');
        $this->load->view('layouts/footer');
    }
    public function save()
    {
        $this->load->model('sektor_model', 'sektor_usaha');
        $_nama_sektor_usaha = $this->input->post('nama_sektor_usaha');
        $_idsektor = $this->input->post('idsektor');

        $data_sektor['nama_sektor_usaha'] = $_nama_sektor_usaha; //?1


        if (!empty($_idsektor)) { // update
            $data_sektor['id'] = $_idsektor;
            $this->sektor_usaha->update($data_sektor);
        } else { //data baru
            $this->sektor_usaha->simpan($data_sektor);
        }

        redirect('sektor', 'refresh');
    }


    public function edit($id)
    {
        $this->load->model('sektor_model', 'sektor_usaha');
        $baris_sektor = $this->sektor_usaha->findById($id);
        $data['objsektor'] = $baris_sektor;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // kirim ke view
        // $this->load->view('layouts/header');
        // $this->load->view('sektor/edit_sektor', $data);
        // $this->load->view('layouts/footer');

        $this->load->view('layouts/header_new', $data);
        $this->load->view('layouts/sidebar_new', $data);
        $this->load->view('layouts/topbar_new', $data);
        $this->load->view('sektor/edit_sektor', $data);
        $this->load->view('layouts/footer');
    }

    public function delete($id)
    {
        $this->load->model('sektor_model', 'sektor_usaha');
        $data_sektor['id'] = $id;
        $this->sektor_usaha->delete($data_sektor);
        redirect('sektor', 'refresh');
    }
}
