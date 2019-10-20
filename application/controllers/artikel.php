<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_artikel');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_artikel'] = $this->model_artikel->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_artikel_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_artikel_input');
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_artikel'] = $this->model_artikel->tampil_data_list()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_artikel',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$now = date("Y-m-d", time());

		$data = array(
			'tanggal' => $now,
			'judul' => $judul,
			'isi' => $isi
			);
		$this->model_artikel->input_data($data,'t_artikel');
		redirect('artikel/index');
	}

	function hapus($id){
		$where = array('id_artikel' => $id);
		$this->model_artikel->hapus_data($where,'t_artikel');
		redirect('artikel/index');
	}
 
	function edit($id_artikel){
		$where = array('id_artikel' => $id_artikel);
		$data['t_artikel'] = $this->model_artikel->edit_data($where,'t_artikel')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_artikel_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
	$id_artikel = $this->input->post('id');
	$judul = $this->input->post('judul');
	$isi = $this->input->post('isi');

	$data = array(
		'judul' => $judul,
		'isi' => $isi
	);

	$where = array(
		'id_artikel' => $id_artikel
	);

	$this->model_artikel->update_data($where,$data,'t_artikel');
	redirect('artikel/index');
}

}
