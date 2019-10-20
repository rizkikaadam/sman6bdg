<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_guru');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');


	}

	function index(){
		$data['t_guru'] = $this->model_guru->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_guru_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_guru'] = $this->model_guru->tampil_data_home()->result();
		$data['t_staf'] = $this->model_guru->tampil_data_staf()->result();
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_guru',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah(){
		$this->load->view('v_guru_input');
	}

	function tambah_aksi(){
		$id_guru = $this->input->post('id_guru');
		$id_staf = $this->input->post('id_staf');
		$id_pelajaran = $this->input->post('id_pelajaran');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_guru' => $id_guru,
			'id_staf'  => $id_staf,
			'id_pelajaran'  => $id_pelajaran
			);
		$this->model_guru->input_data($data,'t_guru');
		redirect('guru/index');
	}

	function hapus($id){
		$where = array('id_guru' => $id);
		$this->model_guru->hapus_data($where,'t_guru');
		redirect('guru/index');
	}
 
	function edit($id_guru){
		$where = array('id_guru' => $id_guru);
		$data['t_guru'] = $this->model_guru->edit_data($where,'t_guru')->result();
		$this->load->view('v_guru_edit',$data);
	}

	function update(){
		$id_guru = $this->input->post('id_guru');
		$id_staf = $this->input->post('id_staf');
		$id_pelajaran = $this->input->post('id_pelajaran');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_staf'  => $id_staf,
			'id_pelajaran'  => $id_pelajaran
		);

	$where = array(
		'id_guru' => $id_guru
	);

	$this->model_guru->update_data($where,$data,'t_guru');
	redirect('guru/index');
	}

}
