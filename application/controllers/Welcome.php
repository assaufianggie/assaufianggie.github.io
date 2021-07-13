<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// $this->load->view('layouts/header', $data);
		// $this->load->view('welcome/index', $data);
		// $this->load->view('layouts/footer', $data);
		$this->load->view('layouts/header_new', $data);
		$this->load->view('layouts/sidebar_new', $data);
		$this->load->view('layouts/topbar_new', $data);
		$this->load->view('welcome/index', $data);
		$this->load->view('layouts/footer_new');
	}
}
