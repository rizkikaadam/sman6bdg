<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_absen');
		$this->load->helper('url');

	}

	function index(){
		$data['t_absen'] = $this->model_absen->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_absen_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_absen_input');
	}

	function tambah_aksi(){
		$id_absen = $this->input->post('id_absen');
		$id_siswa = $this->input->post('id_siswa');
		$tgl_absen = $this->input->post('tgl_absen');
		$status = $this->input->post('status');
		$telat = $this->input->post('telat');
		$id_kelas = $this->input->post('id_kelas');
		$jam_pulang = $this->input->post('jam_pulang');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_absen' => $id_absen,
			'id_siswa'  => $id_siswa,
			'tgl_absen'  => $tgl_absen,
			'jam_absen'  => $jam_absen,
			'status'  => $status,
			'telat'  => $telat,
			'id_kelas'  => $id_kelas,
			'jam_pulang'  => $jam_pulang
			);
		$this->model_absen->input_data($data,'t_absen');
		redirect('absen/index');
	}

	function hapus($id){
		$where = array('id_absen' => $id);
		$this->model_absen->hapus_data($where,'t_absen');
		redirect('absen/index');
	}
 
	function edit($id_absen){
		$where = array('id_absen' => $id_absen);
		$data['t_absen'] = $this->model_absen->edit_data($where,'t_absen')->result();
		$this->load->view('v_absen_edit',$data);
	}

	function update(){
		$id_absen = $this->input->post('id_absen');
		$id_siswa = $this->input->post('id_siswa');
		$tgl_absen = $this->input->post('tgl_absen');
		$status = $this->input->post('status');
		$telat = $this->input->post('telat');
		$id_kelas = $this->input->post('id_kelas');
		$jam_pulang = $this->input->post('jam_pulang');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_siswa'  => $id_siswa,
			'tgl_absen'  => $tgl_absen,
			'jam_absen'  => $jam_absen,
			'status'  => $status,
			'telat'  => $telat,
			'id_kelas'  => $id_kelas,
			'jam_pulang'  => $jam_pulang
		);

	$where = array(
		'id_absen' => $id_absen
	);

	$this->model_absen->update_data($where,$data,'t_absen');
	redirect('absen/index');
	}

}
