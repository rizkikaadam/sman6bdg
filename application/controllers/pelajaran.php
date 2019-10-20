<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_pelajaran');
		$this->load->helper('url');

	}

	function index(){
		$data['t_pelajaran'] = $this->model_pelajaran->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_pelajaran_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_pelajaran_input');
	}

	function tambah_aksi(){
		$id_pelajaran = $this->input->post('id_pelajaran');
		$pelajaran = $this->input->post('pelajaran');
		$id_program_ahli = $this->input->post('id_program_ahli');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_pelajaran' => $id_pelajaran,
			'pelajaran'  => $pelajaran,
			'id_program_ahli'  => $id_program_ahli
			);
		$this->model_pelajaran->input_data($data,'t_pelajaran');
		redirect('pelajaran/index');
	}

	function hapus($id){
		$where = array('id_pelajaran' => $id);
		$this->model_pelajaran->hapus_data($where,'t_pelajaran');
		redirect('pelajaran/index');
	}
 
	function edit($id_pelajaran){
		$where = array('id_pelajaran' => $id_pelajaran);
		$data['t_pelajaran'] = $this->model_pelajaran->edit_data($where,'t_pelajaran')->result();
		$this->load->view('v_pelajaran_edit',$data);
	}

	function update(){
		$id_pelajaran = $this->input->post('id_pelajaran');
		$pelajaran = $this->input->post('pelajaran');
		$id_program_ahli = $this->input->post('id_program_ahli');
		
		$data = array(
			'pelajaran'  => $id_pelajaran,
			'id_program_ahli'  => $id_program_ahli
		);

	$where = array(
		'id_pelajaran' => $id_pelajaran
	);

	$this->model_pelajaran->update_data($where,$data,'t_pelajaran');
	redirect('pelajaran/index');
	}

}
