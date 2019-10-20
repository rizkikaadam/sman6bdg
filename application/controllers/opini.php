<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opini extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_opini');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_opini'] = $this->model_opini->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_opini_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_opini_input');
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_opini'] = $this->model_opini->tampil_data()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_opini',$data);
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
		$this->model_opini->input_data($data,'t_opini');
		redirect('opini/index');
	}

	function hapus($id){
		$where = array('id_opini' => $id);
		$this->model_opini->hapus_data($where,'t_opini');
		redirect('opini/index');
	}
 
	function edit($id_opini){
		$where = array('id_opini' => $id_opini);
		$data['t_opini'] = $this->model_opini->edit_data($where,'t_opini')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_opini_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
	$id_opini = $this->input->post('id');
	$judul = $this->input->post('judul');
	$isi = $this->input->post('isi');

	$data = array(
		'judul' => $judul,
		'isi' => $isi
	);

	$where = array(
		'id_opini' => $id_opini
	);

	$this->model_opini->update_data($where,$data,'t_opini');
	redirect('opini/index');
}

}
