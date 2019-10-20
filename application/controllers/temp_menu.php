<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temp_menu extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_temp_menu');
		$this->load->helper('url');

	}

	function index(){
		$data['t_temp_menu'] = $this->model_temp_menu->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_temp_menu_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_temp_menu_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_temp_menu = $this->input->post('id_temp_menu');
		$temp_atas = $this->input->post('temp_atas');
		$temp_tengah = $this->input->post('temp_tengah');
		$temp_bawah = $this->input->post('temp_bawah');
		$status = $this->input->post('status');
		//$now = date("Y-m-d", time());

		$data = array(
			'temp_atas'  => $temp_atas,
			'temp_tengah'  => $temp_tengah,
			'temp_bawah'  => $temp_bawah,
			'status'  => $status
			);
		$this->model_temp_menu->input_data($data,'t_temp_menu');
		redirect('temp_menu/index');
	}

	function hapus($id){
		$where = array('id_temp_menu' => $id);
		$this->model_temp_menu->hapus_data($where,'t_temp_menu');
		redirect('temp_menu/index');
	}
 
	function edit($id_temp_menu){
		$where = array('id_temp_menu' => $id_temp_menu);
		$data['t_temp_menu'] = $this->model_temp_menu->edit_data($where,'t_temp_menu')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_temp_menu_edit',$edit);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_temp_menu = $this->input->post('id_temp_menu');
		$temp_atas = $this->input->post('temp_atas');
		$temp_tengah = $this->input->post('temp_tengah');
		$temp_bawah = $this->input->post('temp_bawah');
		$status = $this->input->post('status');
		
		$data = array(
			'temp_atas'  => $temp_atas,
			'temp_tengah'  => $temp_tengah,
			'temp_bawah'  => $temp_bawah,
			'status'  => $status
		);

	$where = array(
		'id_temp_menu' => $id_temp_menu
	);

	$this->model_temp_menu->update_data($where,$data,'t_temp_menu');
	redirect('temp_menu/index');
	}

}
