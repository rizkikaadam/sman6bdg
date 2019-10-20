<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_alumni extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_pesan_alumni');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_pesan_alumni'] = $this->model_pesan_alumni->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_pesan_alumni_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_pesan_alumni_input');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_alumni'] = $this->model_pesan_alumni->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_info_alumni',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_pesan_alumni = $this->input->post('id_pesan_alumni');
		$id_member = $this->input->post('id_member');
		$pesan = $this->input->post('pesan');
		$now = date("Y-m-d", time());

		$data = array(
			'id_pesan_alumni' => $id_pesan_alumni,
			'id_semester'  => $id_member,
			'ujian_ke'  => $pesan,
			'tgl_ujian'  => $now
			);
		$this->model_pesan_alumni->input_data($data,'t_pesan_alumni');
		redirect('pesan_alumni/index');
	}

	function hapus($id){
		$where = array('id_pesan_alumni' => $id);
		$this->model_pesan_alumni->hapus_data($where,'t_pesan_alumni');
		redirect('pesan_alumni/index');
	}
 
	function edit($id_pesan_alumni){
		$where = array('id_pesan_alumni' => $id_pesan_alumni);
		$data['t_pesan_alumni'] = $this->model_pesan_alumni->edit_data($where,'t_pesan_alumni')->result();
		$this->load->view('v_pesan_alumni_edit',$data);
	}

	function update(){
		$id_pesan_alumni = $this->input->post('id_pesan_alumni');
		$id_member = $this->input->post('id_member');
		$pesan = $this->input->post('pesan');
		$now = date("Y-m-d", time());

	$data = array(
		'id_pesan_alumni' => $id_pesan_alumni,
		'id_semester'  => $id_member,
		'ujian_ke'  => $pesan,
		'tgl_ujian'  => $now
	);

	$where = array(
		'id_pesan_alumni' => $id_pesan_alumni
	);

	$this->model_pesan_alumni->update_data($where,$data,'t_pesan_alumni');
	redirect('pesan_alumni/index');
	}

}
