<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staf_tu extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_staf_tu');
		$this->load->helper('url');

	}

	function index(){
		$data['t_staf_tu'] = $this->model_staf_tu->tampil_data()->result();
		$this->load->view('v_staf_tu_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_staf_tu_input');
	}

	function tambah_aksi(){
		$id_staf_tu = $this->input->post('id_staf_tu');
		$id_staf = $this->input->post('id_staf');
		$tugas = $this->input->post('tugas');
		$pangkat = $this->input->post('pangkat');
		$now = date("Y-m-d", time());

		$data = array(
			'id_staf_tu' => $id_staf_tu,
			'tugas'  => $tugas,
			'id_staf'  => $id_staf,
			'pangkat'  => $pangkat
			);
		$this->model_staf_tu->input_data($data,'t_staf_tu');
		redirect('staf_tu/index');
	}

	function hapus($id){
		$where = array('id_staf_tu' => $id);
		$this->model_staf_tu->hapus_data($where,'t_staf_tu');
		redirect('staf_tu/index');
	}
 
	function edit($id_staf_tu){
		$where = array('id_staf_tu' => $id_staf_tu);
		$data['t_staf_tu'] = $this->model_staf_tu->edit_data($where,'t_staf_tu')->result();
		$this->load->view('v_staf_tu_edit',$data);
	}

	function update(){
		$id_staf_tu = $this->input->post('id_staf_tu');
		$id_staf = $this->input->post('id_staf');
		$tugas = $this->input->post('tugas');
		$pangkat = $this->input->post('pangkat');
		$now = date("Y-m-d", time());

		$data = array(
			'tugas'  => $tugas,
			'id_staf'  => $id_staf,
			'pangkat'  => $pangkat
		);

	$where = array(
		'id_staf_tu' => $id_staf_tu
	);

	$this->model_staf_tu->update_data($where,$data,'t_staf_tu');
	redirect('staf_tu/index');
	}

}
