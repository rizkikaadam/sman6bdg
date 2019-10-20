<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_profil');
		$this->load->helper('url');

	}

	function index(){
		$data['t_profil'] = $this->model_profil->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_profil_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_profil_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_profil = $this->input->post('id_profil');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$urut = $this->input->post('urut');
		$parent = $this->input->post('parent');
		$link = $this->input->post('link');
		$hide = $this->input->post('hide');
		$target = $this->input->post('target');
		$id_user = $this->input->post('id_user');

		$data = array(
			'id_profil' => $id_profil,
			'judul'  => $judul,
			'isi'  => $isi,
			'urut'  => $urut,
			'parent'  => $parent,
			'link'  => $link,
			'hide'  => $hide,
			'target'  => $target,
			'id_user'  => $id_user
			);
		$this->model_profil->input_data($data,'t_profil');
		redirect('profil/index');
	}

	function hapus($id){
		$where = array('id_profil' => $id);
		$this->model_profil->hapus_data($where,'t_profil');
		redirect('profil/index');
	}
 
	function edit($id_profil){
		$where = array('id_profil' => $id_profil);
		$data['t_profil'] = $this->model_profil->edit_data($where,'t_profil')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_profil_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_profil = $this->input->post('id_profil');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$urut = $this->input->post('urut');
		$parent = $this->input->post('parent');
		$link = $this->input->post('link');
		$hide = $this->input->post('hide');
		$target = $this->input->post('target');
		$id_user = $this->input->post('id_user');

	$data = array(
		'judul'  => $judul,
		'isi'  => $isi,
		'urut'  => $urut,
		'parent'  => $parent,
		'link'  => $link,
		'hide'  => $hide,
		'target'  => $target,
		'id_user'  => $id_user
	);

	$where = array(
		'id_profil' => $id_profil
	);

	$this->model_profil->update_data($where,$data,'t_profil');
	redirect('profil/index');
	}

}
