<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dsp extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_dsp');
		$this->load->helper('url');

	}

	function index(){
		$data['t_dsp'] = $this->model_dsp->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_dsp_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_dsp_input');
	}

	function tambah_aksi(){
		$now = date("Y-m-d", time());
		$id_dsp = $this->input->post('id_dsp');
		$id_siswa = $this->input->post('id_siswa');
		$tingkat = $this->input->post('tingkat');
		$jumlah_bayar = $this->input->post('jumlah_bayar');
		$id_staf_tu = $this->input->post('id_staf_tu');
		$keterangan = $this->input->post('keterangan');
		$dsp = $this->input->post('dsp');
		$sisa = $dsp-$jumlah_bayar;


		$data = array(
			'id_dsp' => $id_dsp,
			'id_siswa'  => $id_siswa,
			'tgl_bayar'  => $now,
			'tingkat'  => $tingkat,
			'dsp'  => $dsp,
			'sisa'  => $sisa,
			'id_staf_TU'  => $id_staf_tu,
			'keterangan'  => $keterangan,
			'jumlah_bayar'  => $jumlah_bayar
			);
		$this->model_dsp->input_data($data,'t_dsp');
		redirect('dsp/index');
	}

	function hapus($id){
		$where = array('id_dsp' => $id);
		$this->model_dsp->hapus_data($where,'t_dsp');
		redirect('dsp/index');
	}
 
	function edit($id_dsp){
		$where = array('id_dsp' => $id_dsp);
		$data['t_dsp'] = $this->model_dsp->edit_data($where,'t_dsp')->result();
		$this->load->view('v_dsp_edit',$data);
	}

	function update(){
		$now = date("Y-m-d", time());
		$id_dsp = $this->input->post('id_dsp');
		$id_siswa = $this->input->post('id_siswa');
		$tingkat = $this->input->post('tingkat');
		$jumlah_bayar = $this->input->post('jumlah_bayar');
		$id_staf_tu = $this->input->post('id_staf_tu');
		$keterangan = $this->input->post('keterangan');
		$dsp = $this->input->post('dsp');
		$sisa = $this->input->post('sisa');
		$sisa2 = $sisa-$jumlah_bayar;

	$data = array(
			'id_siswa'  => $id_siswa,
			'tgl_bayar'  => $now,
			'tingkat'  => $tingkat,
			'dsp'  => $dsp,
			'sisa'  => $sisa2,
			'id_staf_TU'  => $id_staf_tu,
			'keterangan'  => $keterangan,
			'jumlah_bayar'  => $jumlah_bayar
	);

	$where = array(
		'id_dsp' => $id_dsp
	);

	$this->model_dsp->update_data($where,$data,'t_dsp');
	redirect('dsp/index');
	}

}
