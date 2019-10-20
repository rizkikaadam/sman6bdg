<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wali extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_wali');
		$this->load->helper('url');

	}

	function index(){
		$data['t_wali'] = $this->model_wali->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_wali_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_wali_input',$data);
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_wali = $this->input->post('id_wali');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_guru = $this->input->post('id_guru');
		$id_kelas_detail = $this->input->post('id_kelas_detail');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_wali' => $id_wali,
			'id_guru'  => $id_guru,
			'id_pelajaran' => $id_pelajaran,
			'id_kelas_detail'  => $id_kelas_detail
			);
		$this->model_wali->input_data($data,'t_wali');
		redirect('wali/index');
	}

	function hapus($id){
		$where = array('id_wali' => $id);
		$this->model_wali->hapus_data($where,'t_wali');
		redirect('wali/index');
	}
 
	function edit($id_wali){
		$where = array('id_wali' => $id_wali);
		$data['t_wali'] = $this->model_wali->edit_data($where,'t_wali')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_wali_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_wali = $this->input->post('id_wali');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_guru = $this->input->post('id_guru');
		$id_kelas_detail = $this->input->post('id_kelas_detail');

		$data = array(
			'id_wali' => $id_wali,
			'id_guru'  => $id_guru,
			'id_pelajaran' => $id_pelajaran,
			'id_kelas_detail'  => $id_kelas_detail
		);

	$where = array(
		'id_wali' => $id_wali
	);

	$this->model_wali->update_data($where,$data,'t_wali');
	redirect('wali/index');
	}

}