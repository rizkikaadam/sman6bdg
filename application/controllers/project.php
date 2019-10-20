<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_project');
		$this->load->helper('url');

	}

	function index(){
		$data['t_project'] = $this->model_project->tampil_data()->result();
		$this->load->view('v_project_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_project_input');
	}

	function tambah_aksi(){
		$id_project = $this->input->post('id_project');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$now = date("Y-m-d", time());
		$status = $this->input->post('status');
		$visit = $this->input->post('visit');
		$id_member = $this->input->post('id_member');

		$data = array(
			'id_project' => $id_project,
			'judul'  => $judul,
			'isi'  => $deskripsi,
			'urut'  => $kategori,
			'parent'  => $now,
			'link'  => $status,
			'hide'  => $visit,
			'id_user'  => $id_member
			);
		$this->model_project->input_data($data,'t_project');
		redirect('project/index');
	}

	function hapus($id){
		$where = array('id_project' => $id);
		$this->model_project->hapus_data($where,'t_project');
		redirect('project/index');
	}
 
	function edit($id_project){
		$where = array('id_project' => $id_project);
		$data['t_project'] = $this->model_project->edit_data($where,'t_project')->result();
		$this->load->view('v_project_edit',$data);
	}

	function update(){
		$id_project = $this->input->post('id_project');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$kategori = $this->input->post('kategori');
		$now = date("Y-m-d", time());
		$status = $this->input->post('status');
		$visit = $this->input->post('visit');
		$id_member = $this->input->post('id_member');

	$data = array(
		'judul'  => $judul,
		'isi'  => $deskripsi,
		'urut'  => $kategori,
		'parent'  => $now,
		'link'  => $status,
		'hide'  => $visit,
		'id_user'  => $id_member
	);

	$where = array(
		'id_project' => $id_project
	);

	$this->model_project->update_data($where,$data,'t_project');
	redirect('project/index');
	}

}
