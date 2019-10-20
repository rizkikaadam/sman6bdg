<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staf extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_staf');
		$this->load->helper('url');

	}

	function index(){
		$data['t_staf'] = $this->model_staf->tampil_data()->result();
		$this->load->view('v_staf_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_staf_input');
	}

	function tambah_aksi(){
		$id_staf = $this->input->post('id_staf');
		$id_member = $this->input->post('id_member');
		$nip = $this->input->post('nip');
		$hp = $this->input->post('hp');
		$now = date("Y-m-d", time());
		$kode = $this->input->post('kode');
		$kategori = $this->input->post('kategori');
		$profilstaf = $this->input->post('profilstaf');

		$data = array(
			'id_staf' => $id_staf,
			'id_member'  => $id_member,
			'nip'  => $nip,
			'hp'  => $hp,
			'kode'  => $kode,
			'kategori'  => $kategori,
			'id_staf_TU'  => $profilstaf
			);
		$this->model_staf->input_data($data,'t_staf');
		redirect('staf/index');
	}

	function hapus($id){
		$where = array('id_staf' => $id);
		$this->model_staf->hapus_data($where,'t_staf');
		redirect('staf/index');
	}
 
	function edit($id_staf){
		$where = array('id_staf' => $id_staf);
		$data['t_staf'] = $this->model_staf->edit_data($where,'t_staf')->result();
		$this->load->view('v_staf_edit',$data);
	}

	function update(){
		$id_staf = $this->input->post('id_staf');
		$id_member = $this->input->post('id_member');
		$nip = $this->input->post('nip');
		$hp = $this->input->post('hp');
		$now = date("Y-m-d", time());
		$kode = $this->input->post('kode');
		$kategori = $this->input->post('kategori');
		$profilstaf = $this->input->post('profilstaf');

		$data = array(
			'id_member'  => $id_member,
			'nip'  => $nip,
			'hp'  => $hp,
			'kode'  => $kode,
			'kategori'  => $kategori,
			'id_staf_TU'  => $profilstaf
		);

	$where = array(
		'id_staf' => $id_staf
	);

	$this->model_staf->update_data($where,$data,'t_staf');
	redirect('staf/index');
	}

}
