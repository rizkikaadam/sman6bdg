<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class banner extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_banner');
		$this->load->helper('url');

	}

	function index(){
		$data['t_banner'] = $this->model_banner->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_banner_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_banner_input');
		$this->load->view('admin/footer');
	}

	function tambah_aksi(){
		$gambar = $this->input->post('gambar');
		$id_banner = $this->input->post('id_banner');
		$alt = $this->input->post('alt');
		$visit = $this->input->post('visit');
		$url = $this->input->post('url');
		$status = $this->input->post('status');
		$jenis = $this->input->post('jenis');
		$id_user = $this->input->post('id_user');

		$data = array(
			'gambar' => $gambar,
			'id_banner'  => $id_banner,
			'alt'  => $alt,
			'visit'  => $visit,
			'url'  => $url,
			'status'  => $status,
			'jenis'  => $jenis,
			'id_user'  => $id_user
			);
		$this->model_banner->input_data($data,'t_banner');
		redirect('banner/index');
	}

	function hapus($id){
		$where = array('id_banner' => $id);
		$this->model_banner->hapus_data($where,'t_banner');
		redirect('banner/index');
	}
 
	function edit($id_banner){
		$where = array('id_banner' => $id_banner);
		$data['t_banner'] = $this->model_banner->edit_data($where,'t_banner')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_banner_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
	$gambar = $this->input->post('gambar');
		$id_banner = $this->input->post('id_banner');
		$alt = $this->input->post('alt');
		$visit = $this->input->post('visit');
		$url = $this->input->post('url');
		$status = $this->input->post('status');
		$jenis = $this->input->post('jenis');
		$id_user = $this->input->post('id_user');

	$data = array(
		'gambar' => $gambar,
		'id_banner'  => $id_banner,
		'alt'  => $alt,
		'visit'  => $visit,
		'url'  => $url,
		'status'  => $status,
		'jenis'  => $jenis,
		'id_user'  => $id_user
	);

	$where = array(
		'id_banner' => $id_banner
	);

	$this->model_banner->update_data($where,$data,'t_banner');
	redirect('banner/index');
}

}
