<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_voting');
		$this->load->helper('url');

	}

	function index(){
		$data['t_voting_tanya'] = $this->model_voting->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_voting_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_voting_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_voting_tanya = $this->input->post('id_voting_tanya');
		$id_guru = $this->input->post('pertanyaan');
		$isi = $this->input->post('status');
		$now = date("Y-m-d", time());

		$data = array(
			'id_voting_tanya' => $id_voting_tanya,
			'pertanyaan'  => $pertanyaan,
			'tanggal'  => $now,
			'satus'  => $status
			);
		$this->model_voting_tanya->input_data($data,'t_voting_tanya');
		redirect('voting_tanya/index');
	}

	function hapus($id){
		$where = array('id_voting_tanya' => $id);
		$this->model_voting_tanya->hapus_data($where,'t_voting_tanya');
		redirect('voting_tanya/index');
	}
 
	function edit($id_voting_tanya){
		$where = array('id_voting_tanya' => $id_voting_tanya);
		$data['voting_edit'] = $this->model_voting->edit_data($where,'t_voting_tanya')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_voting_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_voting_tanya = $this->input->post('id_voting_tanya');
		$id_guru = $this->input->post('pertanyaan');
		$isi = $this->input->post('status');
		$now = date("Y-m-d", time());

		$data = array(
			'pertanyaan'  => $pertanyaan,
			'tanggal'  => $now,
			'satus'  => $s
		);

	$where = array(
		'id_voting_tanya' => $id_voting_tanya
	);

	$this->model_voting_tanya->update_data($where,$data,'t_voting_tanya');
	redirect('voting_tanya/index');
	}

}
