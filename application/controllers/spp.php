<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_spp');
		$this->load->helper('url');

	}

	function index(){
		$data['t_spp'] = $this->model_spp->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_spp_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_spp_input');
	}

	function tambah_aksi(){
		$id_spp = $this->input->post('id_spp');
		$id_siswa = $this->input->post('id_siswa');
		$bulan = $this->input->post('bulan');
		$tingkat = $this->input->post('tingkat');
		$now = date("Y-m-d", time());
		$iuran = $this->input->post('iuran');
		$ket = $this->input->post('ket');
		$id_staf_tu = $this->input->post('id_staf_tu');

		$data = array(
			'id_spp' => $id_spp,
			'id_siswa'  => $id_siswa,
			'bulan'  => $bulan,
			'tingkat'  => $tingkat,
			'iuran'  => $iuran,
			'ket'  => $ket,
			'tgl_bayar'  => $now,
			'id_staf_TU'  => $id_staf_tu
			);
		$this->model_spp->input_data($data,'t_spp');
		redirect('spp/index');
	}

	function hapus($id){
		$where = array('id_spp' => $id);
		$this->model_spp->hapus_data($where,'t_spp');
		redirect('spp/index');
	}
 
	function edit($id_spp){
		$where = array('id_spp' => $id_spp);
		$data['t_spp'] = $this->model_spp->edit_data($where,'t_spp')->result();
		$this->load->view('v_spp_edit',$data);
	}

	function update(){
		$id_spp = $this->input->post('id_spp');
		$id_siswa = $this->input->post('id_siswa');
		$bulan = $this->input->post('bulan');
		$tingkat = $this->input->post('tingkat');
		$now = date("Y-m-d", time());
		$iuran = $this->input->post('iuran');
		$ket = $this->input->post('ket');
		$id_staf_tu = $this->input->post('id_staf_tu');

	$data = array(
		'id_siswa'  => $id_siswa,
		'bulan'  => $bulan,
		'tingkat'  => $tingkat,
		'iuran'  => $iuran,
		'ket'  => $ket,
		'tgl_bayar'  => $now,
		'id_staf_TU'  => $id_staf_tu
	);

	$where = array(
		'id_spp' => $id_spp
	);

	$this->model_spp->update_data($where,$data,'t_spp');
	redirect('spp/index');
	}

}
