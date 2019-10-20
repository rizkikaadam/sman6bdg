<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_nilai');
		$this->load->helper('url');

	}

	function index(){
		$data['t_nilai'] = $this->model_nilai->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_nilai_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_nilai_input');
	}

	function tambah_aksi(){
		$id_nilai = $this->input->post('id_nilai');
		$id_semester = $this->input->post('id_semester');
		$ujian_ke = $this->input->post('ujian_ke');
		$status = $this->input->post('status');
		$tgl_ujian = $this->input->post('tgl_ujian');
		$skbm = $this->input->post('skbm');
		$id_guru = $this->input->post('id_guru');
		$ket = $this->input->post('ket');
		$kd_remedial = $this->input->post('kd_remedial');
		$id_kelas = $this->input->post('id_kelas');

		$data = array(
			'id_nilai' => $id_nilai,
			'id_semester'  => $id_semester,
			'ujian_ke'  => $ujian_ke,
			'status'  => $status,
			'tgl_ujian'  => $tgl_ujian,
			'skbm'  => $skbm,
			'id_guru'  => $id_guru,
			'ket'  => $ket,
			'kd_remedial'  => $kd_remedial,
			'id_kelas'  => $id_kelas
			);
		$this->model_nilai->input_data($data,'t_nilai');
		redirect('nilai/index');
	}

	function hapus($id){
		$where = array('id_nilai' => $id);
		$this->model_nilai->hapus_data($where,'t_nilai');
		redirect('nilai/index');
	}
 
	function edit($id_nilai){
		$where = array('id_nilai' => $id_nilai);
		$data['t_nilai'] = $this->model_nilai->edit_data($where,'t_nilai')->result();
		$this->load->view('v_nilai_edit',$data);
	}

	function update(){
		$id_nilai = $this->input->post('id_nilai');
		$id_semester = $this->input->post('id_semester');
		$ujian_ke = $this->input->post('ujian_ke');
		$status = $this->input->post('status');
		$tgl_ujian = $this->input->post('tgl_ujian');
		$skbm = $this->input->post('skbm');
		$id_guru = $this->input->post('id_guru');
		$ket = $this->input->post('ket');
		$kd_remedial = $this->input->post('kd_remedial');
		$id_kelas = $this->input->post('id_kelas');

	$data = array(
		'id_semester'  => $id_semester,
		'ujian_ke'  => $ujian_ke,
		'status'  => $status,
		'tgl_ujian'  => $tgl_ujian,
		'skbm'  => $skbm,
		'id_guru'  => $id_guru,
		'ket'  => $ket,
		'kd_remedial'  => $kd_remedial,
		'id_kelas'  => $id_kelas
	);

	$where = array(
		'id_nilai' => $id_nilai
	);

	$this->model_nilai->update_data($where,$data,'t_nilai');
	redirect('nilai/index');
	}

}
