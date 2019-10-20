<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mengajar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_mengajar');
		$this->load->helper('url');

	}

	function index(){
		$data['t_mengajar'] = $this->model_mengajar->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_mengajar_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_mengajar_input',$data);
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_mengajar = $this->input->post('id_mengajar');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_guru = $this->input->post('id_guru');
		$id_kelas_detail = $this->input->post('id_kelas_detail');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_mengajar' => $id_mengajar,
			'id_guru'  => $id_guru,
			'id_pelajaran' => $id_pelajaran,
			'id_kelas_detail'  => $id_kelas_detail
			);
		$this->model_mengajar->input_data($data,'t_mengajar');
		redirect('mengajar/index');
	}

	function hapus($id){
		$where = array('id_mengajar' => $id);
		$this->model_mengajar->hapus_data($where,'t_mengajar');
		redirect('mengajar/index');
	}
 
	function edit($id_mengajar){
		$where = array('id_mengajar' => $id_mengajar);
		$data['t_mengajar'] = $this->model_mengajar->edit_data($where,'t_mengajar')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_mengajar_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_mengajar = $this->input->post('id_mengajar');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_guru = $this->input->post('id_guru');
		$id_kelas_detail = $this->input->post('id_kelas_detail');

		$data = array(
			'id_mengajar' => $id_mengajar,
			'id_guru'  => $id_guru,
			'id_pelajaran' => $id_pelajaran,
			'id_kelas_detail'  => $id_kelas_detail
		);

	$where = array(
		'id_mengajar' => $id_mengajar
	);

	$this->model_mengajar->update_data($where,$data,'t_mengajar');
	redirect('mengajar/index');
	}

}