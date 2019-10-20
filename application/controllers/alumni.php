<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_alumni');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');
		$this->load->model('model_alumni');

	}

	function index(){
		$data['t_alumni'] = $this->model_alumni->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_alumni_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_alumni_input',$data);
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_alumni'] = $this->model_alumni->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_alumni',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_alumni = $this->input->post('id_alumni');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_guru = $this->input->post('id_guru');
		$id_kelas_detail = $this->input->post('id_kelas_detail');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_alumni' => $id_alumni,
			'id_guru'  => $id_guru,
			'id_pelajaran' => $id_pelajaran,
			'id_kelas_detail'  => $id_kelas_detail
			);
		$this->model_alumni->input_data($data,'t_alumni');
		redirect('alumni/index');
	}

	function hapus($id){
		$where = array('id_alumni' => $id);
		$this->model_alumni->hapus_data($where,'t_alumni');
		redirect('alumni/index');
	}
 
	function edit($id_alumni){
		$where = array('id_alumni' => $id_alumni);
		$data['t_alumni'] = $this->model_alumni->edit_data($where,'t_alumni')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_alumni_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_alumni = $this->input->post('id_alumni');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_guru = $this->input->post('id_guru');
		$id_kelas_detail = $this->input->post('id_kelas_detail');

		$data = array(
			'id_alumni' => $id_alumni,
			'id_guru'  => $id_guru,
			'id_pelajaran' => $id_pelajaran,
			'id_kelas_detail'  => $id_kelas_detail
		);

	$where = array(
		'id_alumni' => $id_alumni
	);

	$this->model_alumni->update_data($where,$data,'t_alumni');
	redirect('alumni/index');
	}

}