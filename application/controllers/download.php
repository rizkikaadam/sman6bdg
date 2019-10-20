<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_download');
		$this->load->helper('url');

	}

	function index(){
		$data['t_download'] = $this->model_download->tampil_data()->result();
		$this->load->view('v_download_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_download_input');
	}

	function tambah_aksi(){
		$now = date("Y-m-d", time());
		$id_download = $this->input->post('id_download');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$file = $this->input->post('file');
		$visit = $this->input->post('visit');
		$ukuran = $this->input->post('ukuran');
		$id_user = $this->input->post('id_user');


		$data = array(
			'id_download' => $id_download,
			'judul'  => $judul,
			'tanggal'  => $now,
			'deskripsi'  => $deskripsi,
			'file'  => $file,
			'visit'  => $visit,
			'ukuran'  => $ukuran,
			'id_user'  => $id_user
			);
		$this->model_download->input_data($data,'t_download');
		redirect('download/index');
	}

	function hapus($id){
		$where = array('id_download' => $id);
		$this->model_download->hapus_data($where,'t_download');
		redirect('download/index');
	}
 
	function edit($id_download){
		$where = array('id_download' => $id_download);
		$data['t_download'] = $this->model_download->edit_data($where,'t_download')->result();
		$this->load->view('v_download_edit',$data);
	}

	function update(){
		$now = date("Y-m-d", time());
		$id_download = $this->input->post('id_download');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$file = $this->input->post('file');
		$visit = $this->input->post('visit');
		$ukuran = $this->input->post('ukuran');
		$id_user = $this->input->post('id_user');

	$data = array(
			'judul'  => $judul,
			'tanggal'  => $now,
			'deskripsi'  => $deskripsi,
			'file'  => $file,
			'visit'  => $visit,
			'ukuran'  => $ukuran,
			'id_user'  => $id_user
	);

	$where = array(
		'id_download' => $id_download
	);

	$this->model_download->update_data($where,$data,'t_download');
	redirect('download/index');
	}

}
