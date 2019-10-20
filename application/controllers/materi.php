<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_soal');
		$this->load->helper('url');

	}

	function index(){
		$data['t_materi'] = $this->model_soal->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_materi_tanya = $this->input->post('id_materi_tanya');
		$id_guru = $this->input->post('pertanyaan');
		$isi = $this->input->post('status');
		$now = date("Y-m-d", time());

		$data = array(
			'id_materi_tanya' => $id_materi_tanya,
			'pertanyaan'  => $pertanyaan,
			'tanggal'  => $now,
			'satus'  => $status
			);
		$this->model_materi_tanya->input_data($data,'t_materi_tanya');
		redirect('materi_tanya/index');
	}

	function hapus($id){
		$where = array('id_materi_tanya' => $id);
		$this->model_materi_tanya->hapus_data($where,'t_materi_tanya');
		redirect('materi_tanya/index');
	}
 
	function edit($id_materi_tanya){
		$where = array('id_download' => $id_materi_tanya);
		$data['materi_edit'] = $this->model_materi->edit_data($where,'t_download')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_materi_tanya = $this->input->post('id_materi_tanya');
		$id_guru = $this->input->post('pertanyaan');
		$isi = $this->input->post('status');
		$now = date("Y-m-d", time());

		$data = array(
			'pertanyaan'  => $pertanyaan,
			'tanggal'  => $now,
			'satus'  => $s
		);

	$where = array(
		'id_materi_tanya' => $id_materi_tanya
	);

	$this->model_materi_tanya->update_data($where,$data,'t_materi_tanya');
	redirect('materi_tanya/index');
	}

}
