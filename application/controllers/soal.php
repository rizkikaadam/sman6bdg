<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_soal');
		$this->load->helper('url');

	}

	function index(){
		$data['t_soal'] = $this->model_soal->tampil_data()->result();
		$this->load->view('v_soal_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_soal_input');
	}

	function tambah_aksi(){
		$id_soal = $this->input->post('id_soal');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$file = $this->input->post('file');
		$now = date("Y-m-d", time());
		$visit = $this->input->post('visit');
		$ukuran = $this->input->post('ukuran');
		$id_user = $this->input->post('id_user');

		$data = array(
			'id_soal' => $id_soal,
			'judul'  => $judul,
			'deskripsi'  => $deskripsi,
			'kategori'  => $kategori,
			'file'  => $file,
			'visit'  => $visit,
			'ukuran'  => $ukuran,
			'tanggal'  => $now,
			'id_user'  => $id_user
			);
		$this->model_soal->input_data($data,'t_soal');
		redirect('soal/index');
	}

	function hapus($id){
		$where = array('id_soal' => $id);
		$this->model_soal->hapus_data($where,'t_soal');
		redirect('soal/index');
	}
 
	function edit($id_soal){
		$where = array('id_soal' => $id_soal);
		$data['t_soal'] = $this->model_soal->edit_data($where,'t_soal')->result();
		$this->load->view('v_soal_edit',$data);
	}

	function update(){
		$id_soal = $this->input->post('id_soal');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$file = $this->input->post('file');
		$now = date("Y-m-d", time());
		$visit = $this->input->post('visit');
		$ukuran = $this->input->post('ukuran');
		$id_user = $this->input->post('id_user');

	$data = array(
		'judul'  => $judul,
		'kategori'  => $kategori,
		'deskripsi'  => $deskripsi,
		'file'  => $file,
		'visit'  => $visit,
		'ukuran'  => $ukuran,
		'tanggal'  => $now,
		'id_user'  => $id_user
	);

	$where = array(
		'id_soal' => $id_soal
	);

	$this->model_soal->update_data($where,$data,'t_soal');
	redirect('soal/index');
	}

}
