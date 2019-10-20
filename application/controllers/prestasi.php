<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_prestasi');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('model_link');
		$this->load->model('model_info');
		$this->load->library('unit_test');
		$this->Test();

	}

	function index(){
		$data['t_prestasi'] = $this->model_prestasi->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_prestasi_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_prestasi_input',$data);
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_prestasi'] = $this->model_prestasi->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_prestasi',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_prestasi = $this->input->post('id_prestasi');
		$judul = $this->input->post('judul');
		$keterangan = $this->input->post('keterangan');
		$id_user = $this->input->post('id_user');

		$data = array(
			'id_prestasi' => $id_prestasi,
			'judul'  => $judul,
			'keterangan'  => $keterangan,
			'id_user'  => $id_user
			);
		$this->model_prestasi->input_data($data,'t_prestasi');
		redirect('prestasi/index');
	}

	function hapus($id){
		$where = array('id_prestasi' => $id);
		$this->model_prestasi->hapus_data($where,'t_prestasi');
		redirect('prestasi/index');
	}
 
	function edit($id_prestasi){
		$where = array('id_prestasi' => $id_prestasi);
		$data['t_prestasi'] = $this->model_prestasi->edit_data($where,'t_prestasi')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_prestasi_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_prestasi = $this->input->post('id_prestasi');
		$judul = $this->input->post('judul');
		$keterangan = $this->input->post('keterangan');
		$id_user = $this->input->post('id_user');

	$data = array(
		'judul'  => $judul,
		'keterangan'  => $keterangan,
		'id_user'  => $id_user
	);

	$where = array(
		'id_prestasi' => $id_prestasi
	);

	$this->model_prestasi->update_data($where,$data,'t_prestasi');
	redirect('prestasi/index');
	}

	function Test(){

	$test = $this->model_prestasi->tampil_data_home()->result();

	$this->unit->run($test, 'is_array', 'Menampilkan data prestasi');

	}

}
