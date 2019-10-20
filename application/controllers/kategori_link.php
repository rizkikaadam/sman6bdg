<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_link extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_kategori_link');
		$this->load->helper('url');

	}

	function index(){
		$data['t_kategori_link'] = $this->model_kategori_link->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_kategori_link_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_kategori_link_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$id_kategori_link = $this->input->post('id_kategori_link');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$urut = $this->input->post('urut');
		$parent = $this->input->post('parent');
		$link = $this->input->post('link');
		$hide = $this->input->post('hide');
		$target = $this->input->post('target');
		$id_user = $this->input->post('id_user');

		$data = array(
			'id_kategori_link' => $id_kategori_link,
			'judul'  => $judul,
			'isi'  => $isi,
			'urut'  => $urut,
			'parent'  => $parent,
			'link'  => $link,
			'hide'  => $hide,
			'target'  => $target,
			'id_user'  => $id_user
			);
		$this->model_kategori_link->input_data($data,'t_kategori');
		redirect('kategori_link/index');
	}

	function hapus($id){
		$where = array('id_kategori_link' => $id);
		$this->model_kategori_link->hapus_data($where,'t_kategori');
		redirect('kategori_link/index');
	}
 
	function edit($id_kategori_link){
		$where = array('id_kategori_link' => $id_kategori_link);
		$data['t_kategori_link'] = $this->model_kategori_link->edit_data($where,'t_kategori')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_kategori_link_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_kategori_link = $this->input->post('id_kategori_link');
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
		'id_kategori_link' => $id_kategori_link
	);

	$this->model_kategori_link->update_data($where,$data,'t_kategori');
	redirect('kategori_link/index');
	}

}
