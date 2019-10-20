<?php
session_start();
class Cek_member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('kategori')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}
	public function index() {
		$data['username'] = $this->session->userdata('username');
		$this->load->view('v_index_admin', $data);
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('kategori');
		session_destroy();
		redirect('login');
	}
}
?>