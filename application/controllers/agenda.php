<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_agenda');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');
	}

	function index(){
		$data['calenderevent'] = $this->model_agenda->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_agenda_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_agenda_input');
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_kalender',$data);
		$this->load->view('umum/v_footer');
	}

	function tampil_agenda(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_agenda',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_agenda = $this->input->post('id_agenda');
		$id_member = $this->input->post('id_member');
		$pesan = $this->input->post('pesan');
		$now = date("Y-m-d", time());

		$data = array(
			'id_agenda' => $id_agenda,
			'id_semester'  => $id_member,
			'ujian_ke'  => $pesan,
			'tgl_ujian'  => $now
			);
		$this->model_agenda->input_data($data,'t_agenda');
		redirect('agenda/index');
	}

	function hapus($id){
		$where = array('id_agenda' => $id);
		$this->model_agenda->hapus_data($where,'t_agenda');
		redirect('agenda/index');
	}
 
	function edit($id_agenda){
		$where = array('id_calenderevent' => $id_calenderevent);
		$data['calenderevent'] = $this->model_agenda->edit_data($where,'calenderevent')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_agenda_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_agenda = $this->input->post('id_agenda');
		$id_member = $this->input->post('id_member');
		$pesan = $this->input->post('pesan');
		$now = date("Y-m-d", time());

	$data = array(
		'id_agenda' => $id_agenda,
		'id_semester'  => $id_member,
		'ujian_ke'  => $pesan,
		'tgl_ujian'  => $now
	);

	$where = array(
		'id_agenda' => $id_agenda
	);

	$this->model_agenda->update_data($where,$data,'t_agenda');
	redirect('agenda/index');
	}

}
