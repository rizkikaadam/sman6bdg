<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukutamu extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_buku');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_buku'] = $this->model_buku->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_bukutamu_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_buku_input');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();	
		$data['t_buku'] = $this->model_buku->tampil_data()->result();	
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_bukutamu',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$now = date("Y-m-d", time());
		$id_buku = $this->input->post('id_buku');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$komentar = $this->input->post('komentar');
		$ipkom = $this->input->post('ipkom');


		$data = array(
			'id_buku' => $id_buku,
			'nama'  => $nama,
			'postdate'  => $now,
			'email'  => $email,
			'alamat'  => $alamat,
			'komentar'  => $komentar,
			'ipkom'  => $ipkom
			);
		$this->model_buku->input_data($data,'t_buku');
		redirect('bukutamu/index');
	}

	function hapus($id){
		$where = array('id_buku' => $id);
		$this->model_buku->hapus_data($where,'t_buku');
		redirect('bukutamu/index');
	}
 
	function edit($id_buku){
		$where = array('id_buku' => $id_buku);
		$data['t_buku'] = $this->model_buku->edit_data($where,'t_buku')->result();
		$this->load->view('v_buku_edit',$data);
	}

	function update(){
		$now = date("Y-m-d", time());
		$id_buku = $this->input->post('id_buku');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$komentar = $this->input->post('komentar');
		$ipkom = $this->input->post('ipkom');

	$data = array(
		'nama'  => $nama,
			'postdate'  => $now,
			'email'  => $email,
			'alamat'  => $alamat,
			'komentar'  => $komentar,
			'ipkom'  => $ipkom
	);

	$where = array(
		'id_buku' => $id_buku
	);

	$this->model_buku->update_data($where,$data,'t_buku');
	redirect('bukutamu/index');
	}

	function jawab(){
		$now = date("Y-m-d", time());
		$id_buku = $this->input->post('id_buku');
		$id_user = $this->input->post('id_user');
		$alamat = $this->input->post('tanggapan');

	$data = array(
		'id_buku'  => $id_buku,
			'id_user'  => $id_user,
			'tanggapan'  => $tanggapan,
			'tanggal'  => $now
	);

	$this->model_buku->update_data($where,$data,'t_buku_detail');
	redirect('bukutamu/index');
	}
}
