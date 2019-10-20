<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bpbk extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_bpbk');
		$this->load->helper('url');

	}

	function index(){
		$data['t_bpbk'] = $this->model_bpbk->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_bpbk_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_bpbk_input');
	}

	function tambah_aksi(){
		$now = date("Y-m-d", time());
		$id_bpbk = $this->input->post('id_bpbk');
		$id_semester = $this->input->post('id_semester');
		$id_siswa = $this->input->post('id_siswa');
		$id_guru = $this->input->post('id_guru');
		$penilaian = $this->input->post('penilaian');
		$keterangan = $this->input->post('keterangan');


		$data = array(
			'id_siswa' => $id_siswa,
			'id_guru'  => $id_guru,
			'tgl'  => $now,
			'id_semester'  => $id_semester,
			'penilaian'  => $penilaian,
			'keterangan'  => $keterangan,
			'id_bpbk'  => $id_bpbk
			);
		$this->model_bpbk->input_data($data,'t_bpbk');
		redirect('bpbk/index');
	}

	function hapus($id){
		$where = array('id_bpbk' => $id);
		$this->model_bpbk->hapus_data($where,'t_bpbk');
		redirect('bpbk/index');
	}
 
	function edit($id_bpbk){
		$where = array('id_bpbk' => $id_bpbk);
		$data['t_bpbk'] = $this->model_bpbk->edit_data($where,'t_bpbk')->result();
		$this->load->view('v_bpbk_edit',$data);
	}

	function update(){
		$id_bpbk = $this->input->post('id_bpbk');
		$now = date("Y-m-d", time());
		$id_semester = $this->input->post('id_semester');
		$id_siswa = $this->input->post('id_siswa');
		$id_guru = $this->input->post('id_guru');
		$penilaian = $this->input->post('penilaian');
		$keterangan = $this->input->post('keterangan');

	$data = array(
		'id_siswa' => $id_siswa,
			'id_guru'  => $id_guru,
			'tgl'  => $now,
			'id_semester'  => $id_semester,
			'penilaian'  => $penilaian,
			'keterangan'  => $keterangan
	);

	$where = array(
		'id_bpbk' => $id_bpbk
	);

	$this->model_bpbk->update_data($where,$data,'t_bpbk');
	redirect('bpbk/index');
	}

}
