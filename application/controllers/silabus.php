<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Silabus extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_silabus');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_silabus'] = $this->model_silabus->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_silabus_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_silabus'] = $this->model_silabus->tampil_data()->result();
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['s1'] = $this->model_silabus->tampil_data_semester1()->result();
		$data['s2'] = $this->model_silabus->tampil_data_semester2()->result();
		$data['s3'] = $this->model_silabus->tampil_data_semester3()->result();
		$data['s4'] = $this->model_silabus->tampil_data_semester4()->result();
		$data['s5'] = $this->model_silabus->tampil_data_semester5()->result();
		$data['s6'] = $this->model_silabus->tampil_data_semester6()->result();
		$data['s7'] = $this->model_silabus->tampil_data_semester7()->result();
		$data['s8'] = $this->model_silabus->tampil_data_semester8()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_silabus',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_silabus_tambah',$data);
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_silabus = $this->input->post('id_silabus');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_kelas = $this->input->post('id_kelas');
		$file = $this->input->post('file');
		$now = date("Y-m-d", time());
		$visit = $this->input->post('visit');
		$ket = $this->input->post('ket');
		$id_semester = $this->input->post('id_semester');

		$data = array(
			'id_silabus' => $id_silabus,
			'id_pelajaran'  => $id_pelajaran,
			'id_kelas'  => $id_kelas,
			'file'  => $file,
			'visit'  => $visit,
			'ket'  => $ket,
			'tanggal'  => $now,
			'id_semester'  => $id_semester
			);
		$this->model_silabus->input_data($data,'t_silabus');
		redirect('silabus/index');
	}

	function hapus($id){
		$where = array('id_silabus' => $id);
		$this->model_silabus->hapus_data($where,'t_silabus');
		redirect('silabus/index');
	}
 
	function edit($id_silabus){
		$where = array('id_silabus' => $id_silabus);
		$data['t_silabus'] = $this->model_silabus->edit_data($where,'t_silabus')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_silabus_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_silabus = $this->input->post('id_silabus');
		$id_pelajaran = $this->input->post('id_pelajaran');
		$id_kelas = $this->input->post('id_kelas');
		$file = $this->input->post('file');
		$now = date("Y-m-d", time());
		$visit = $this->input->post('visit');
		$ket = $this->input->post('ket');
		$id_semester = $this->input->post('id_semester');

	$data = array(
		'id_pelajaran'  => $id_pelajaran,
		'id_kelas'  => $id_kelas,
		'file'  => $file,
		'visit'  => $visit,
		'ket'  => $ket,
		'tanggal'  => $now,
		'id_semester'  => $id_semester
	);

	$where = array(
		'id_silabus' => $id_silabus
	);

	$this->model_silabus->update_data($where,$data,'t_silabus');
	redirect('silabus/index');
	}

}
