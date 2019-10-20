<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gambar_atas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_gambar_atas');
		$this->load->helper('url');

	}

	function index(){
		$data['t_gambar_atas'] = $this->model_gambar_atas->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_gambar_atas_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_gambar_atas_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_gambar_atas = $this->input->post('id_gambar_atas');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$urut = $this->input->post('urut');
		$parent = $this->input->post('parent');
		$link = $this->input->post('link');
		$hide = $this->input->post('hide');
		$target = $this->input->post('target');
		$id_user = $this->input->post('id_user');

		$data = array(
			'id_gambar_atas' => $id_gambar_atas,
			'judul'  => $judul,
			'isi'  => $isi,
			'urut'  => $urut,
			'parent'  => $parent,
			'link'  => $link,
			'hide'  => $hide,
			'target'  => $target,
			'id_user'  => $id_user
			);
		$this->model_gambar_atas->input_data($data,'t_gambar_atas');
		redirect('gambar_atas/index');
	}

	function hapus($id){
		$where = array('id_gambar_atas' => $id);
		$this->model_gambar_atas->hapus_data($where,'t_gambar_atas');
		redirect('gambar_atas/index');
	}
 
	function edit($id_gambar_atas){
		$where = array('id_gambar_atas' => $id_gambar_atas);
		$data['t_gambar_atas'] = $this->model_gambar_atas->edit_data($where,'t_gambar_atas')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_gambar_atas_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_gambar_atas = $this->input->post('id_gambar_atas');
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
		'id_gambar_atas' => $id_gambar_atas
	);

	$this->model_gambar_atas->update_data($where,$data,'t_gambar_atas');
	redirect('gambar_atas/index');
	}

}
