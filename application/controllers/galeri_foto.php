<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeri_foto extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_galeri_foto');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_galeri_foto'] = $this->model_galeri_foto->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_galeri_foto_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_galeri_foto_input');
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_album'] = $this->model_galeri_foto->tampil_data_album()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_galeri_foto',$data);
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
		$this->model_galeri_foto->input_data($data,'t_galeri_foto');
		redirect('galeri_foto/index');
	}

	function hapus($id){
		$where = array('id_galeri_foto' => $id);
		$this->model_galeri_foto->hapus_data($where,'t_galeri_foto');
		redirect('galeri_foto/index');
	}
 
	function edit($id_galeri_foto){
		$where = array('id_galeri_foto' => $id_galeri_foto);
		$data['t_galeri_foto'] = $this->model_galeri_foto->edit_data($where,'t_galeri_foto')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_galeri_foto_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
	$id_galeri_foto = $this->input->post('id');
	$judul = $this->input->post('judul');
	$isi = $this->input->post('isi');

	$data = array(
		'judul' => $judul,
		'isi' => $isi
	);

	$where = array(
		'id_galeri_foto' => $id_galeri_foto
	);

	$this->model_galeri_foto->update_data($where,$data,'t_galeri_foto');
	redirect('galeri_foto/index');
}

}
