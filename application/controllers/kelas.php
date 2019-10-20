<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_kelas');
		$this->load->helper('url');

	}

	function index(){
		$data['t_kelas'] = $this->model_kelas->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_kelas_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_kelas_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_kelas = $this->input->post('id_kelas');
		$nama = $this->input->post('nama');
		$tingkat = $this->input->post('tingkat');
		$program = $this->input->post('program');


		$data = array(
			'id_kelas' => $id_kelas,
			'nama'  => $nama,
			'tingkat'  => $tingkat,
			'program'  => $program
			);
		$this->model_kelas->input_data($data,'t_kelas');
		redirect('kelas/index');
	}

	function hapus($id){
		$where = array('id_kelas' => $id);
		$this->model_kelas->hapus_data($where,'t_kelas');
		redirect('kelas/index');
	}
 
	function edit($id_kelas){
		$where = array('id_kelas' => $id_kelas);
		$data['t_kelas'] = $this->model_kelas->edit_data($where,'t_kelas')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_kelas_tampil',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_kelas = $this->input->post('id_kelas');
		$nama = $this->input->post('nama');
		$tingkat = $this->input->post('tingkat');
		$program = $this->input->post('program');

	$data = array(
		'id_kelas' => $id_kelas,
		'nama'  => $nama,
		'tingkat'  => $tingkat,
		'program'  => $program	
	);

	$where = array(
		'id_kelas' => $id_kelas
	);

	$this->model_kelas->update_data($where,$data,'t_kelas');
	redirect('kelas/index');
	}

}
