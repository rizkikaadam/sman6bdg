<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_laporan');
		$this->load->helper('url');

	}

	function index(){
		$data['t_laporan'] = $this->model_laporan->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_laporan_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_laporan_input');
	}

	function tambah_aksi(){
		$id_laporan = $this->input->post('id_laporan');
		$judul = $this->input->post('judul');
		$file = $this->input->post('file');
		$status = $this->input->post('status');
		$id_guru = $this->input->post('id_guru');
		$now = date("Y-m-d", time());

		$data = array(
			'id_laporan' => $id_laporan,
			'tgl_kirim'  => $now,
			'judul'  => $judul,
			'file'  => $file,
			'status'  => $status,
			'id_guru'  => $id_guru
			);
		$this->model_laporan->input_data($data,'t_laporan');
		redirect('laporan/index');
	}

	function hapus($id){
		$where = array('id_laporan' => $id);
		$this->model_laporan->hapus_data($where,'t_laporan');
		redirect('laporan/index');
	}
 
	function edit($id_laporan){
		$where = array('id_laporan' => $id_laporan);
		$data['t_laporan'] = $this->model_laporan->edit_data($where,'t_laporan')->result();
		$this->load->view('v_laporan_edit',$data);
	}

	function update(){
		$id_laporan = $this->input->post('id_laporan');
		$judul = $this->input->post('judul');
		$file = $this->input->post('file');
		$status = $this->input->post('status');
		$id_guru = $this->input->post('id_guru');
		$now = date("Y-m-d", time());


	$data = array(
		'tgl_kirim'  => $now,
		'judul'  => $judul,
		'file'  => $file,
		'status'  => $status,
		'id_guru'  => $id_guru
	);

	$where = array(
		'id_laporan' => $id_laporan
	);

	$this->model_laporan->update_data($where,$data,'t_laporan');
	redirect('laporan/index');
	}

}
