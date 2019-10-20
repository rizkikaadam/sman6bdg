<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class info extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_info');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_info'] = $this->model_info->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_info_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_info_input');
		$this->load->view('admin/footer');
	}


	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_info');
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_info = $this->input->post('id_info');
		$isi = $this->input->post('isi');
		$subject = $this->input->post('subject');
		$id_user = $this->input->post('id_user');
		$now = date("Y-m-d", time());

		$data = array(
			'id_info' => $id_info,
			'isi'  => $isi,
			'postdate'  => $now,
			'subject'  => $subject,
			'id_user'  => $id_user
			);
		$this->model_info->input_data($data,'t_info');
		redirect('info/index');
	}

	function hapus($id){
		$where = array('id_info' => $id);
		$this->model_info->hapus_data($where,'t_info');
		redirect('info/index');
	}
 
	function edit($id_info){
		$where = array('id_info' => $id_info);
		$data['t_info'] = $this->model_info->edit_data($where,'t_info')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_info_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_info = $this->input->post('id_info');
		$isi = $this->input->post('isi');
		$subject = $this->input->post('subject');
		$id_user = $this->input->post('id_user');
		$now = date("Y-m-d", time());

		$data = array(
			'isi'  => $isi,
			'postdate'  => $now,
			'subject'  => $subject,
			'id_user'  => $id_user
		);

	$where = array(
		'id_info' => $id_info
	);

	$this->model_info->update_data($where,$data,'t_info');
	redirect('info/index');
	}

}
