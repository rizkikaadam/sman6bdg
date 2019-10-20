<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_ajar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_tahun_ajar');
		$this->load->helper('url');

	}

	function index(){
		$data['t_tahun_ajar'] = $this->model_tahun_ajar->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_tahun_ajar_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_tahun_ajar_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_tahun_ajar = $this->input->post('id_tahun_ajar');
		$tahun_ajar = $this->input->post('tahun_ajar');
		$id_tahun_ajar = $this->input->post('id_tahun_ajar');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_tahun_ajar' => $id_tahun_ajar,
			'tahun_ajar'  => $tahun_ajar,
			'id_tahun_ajar'  => $id_tahun_ajar
			);
		$this->model_tahun_ajar->input_data($data,'t_tahun_ajar');
		redirect('tahun_ajar/index');
	}

	function hapus($id){
		$where = array('id_tahun_ajar' => $id);
		$this->model_tahun_ajar->hapus_data($where,'t_tahun_ajar');
		redirect('tahun_ajar/index');
	}
 
	function edit($id_tahun_ajar){
		$where = array('id_tahun_ajar' => $id_tahun_ajar);
		$data['t_tahun_ajar'] = $this->model_tahun_ajar->edit_data($where,'t_tahun_ajar')->result();
		$this->load->view('v_tahun_ajar_edit',$data);
	}

	function update(){
		$id_tahun_ajar = $this->input->post('id_tahun_ajar');
		$tahun_ajar = $this->input->post('tahun_ajar');
		$id_tahun_ajar = $this->input->post('id_tahun_ajar');
		
		$data = array(
			'tahun_ajar'  => $id_tahun_ajar,
			'id_tahun_ajar'  => $id_tahun_ajar
		);

	$where = array(
		'id_tahun_ajar' => $id_tahun_ajar
	);

	$this->model_tahun_ajar->update_data($where,$data,'t_tahun_ajar');
	redirect('tahun_ajar/index');
	}

}
