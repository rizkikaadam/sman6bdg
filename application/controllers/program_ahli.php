<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_ahli extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_program_ahli');
		$this->load->helper('url');

	}

	function index(){
		$data['t_program_ahli'] = $this->model_program_ahli->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_program_ahli_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_program_ahli_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_program_ahli = $this->input->post('id_program_ahli');
		$program_ahli = $this->input->post('program_ahli');
		$id_program_ahli = $this->input->post('id_program_ahli');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_program_ahli' => $id_program_ahli,
			'program_ahli'  => $program_ahli,
			'id_program_ahli'  => $id_program_ahli
			);
		$this->model_program_ahli->input_data($data,'t_program_ahli');
		redirect('program_ahli/index');
	}

	function hapus($id){
		$where = array('id_program_ahli' => $id);
		$this->model_program_ahli->hapus_data($where,'t_program_ahli');
		redirect('program_ahli/index');
	}
 
	function edit($id_program_ahli){
		$where = array('id_program_ahli' => $id_program_ahli);
		$data['t_program_ahli'] = $this->model_program_ahli->edit_data($where,'t_program_ahli')->result();
		$this->load->view('v_program_ahli_edit',$data);
	}

	function update(){
		$id_program_ahli = $this->input->post('id_program_ahli');
		$program_ahli = $this->input->post('program_ahli');
		$id_program_ahli = $this->input->post('id_program_ahli');
		
		$data = array(
			'program_ahli'  => $id_program_ahli,
			'id_program_ahli'  => $id_program_ahli
		);

	$where = array(
		'id_program_ahli' => $id_program_ahli
	);

	$this->model_program_ahli->update_data($where,$data,'t_program_ahli');
	redirect('program_ahli/index');
	}

}
