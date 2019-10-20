<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_ajar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_materi_ajar');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');
		$this->load->model('model_materi_ajar');

	}

	function index(){
		$data['t_materi_ajar'] = $this->model_materi_ajar->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_ajar_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_ajar_input');
		$this->load->view('admin/footer');
	}


	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_materi_ajar'] = $this->model_materi_ajar->tampil_data()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_materi_ajar',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_materi_ajar_tanya = $this->input->post('id_materi_ajar_tanya');
		$id_guru = $this->input->post('pertanyaan');
		$isi = $this->input->post('status');
		$now = date("Y-m-d", time());

		$data = array(
			'id_materi_ajar_tanya' => $id_materi_ajar_tanya,
			'pertanyaan'  => $pertanyaan,
			'tanggal'  => $now,
			'satus'  => $status
			);
		$this->model_materi_ajar_tanya->input_data($data,'t_materi_ajar_tanya');
		redirect('materi_ajar_tanya/index');
	}

	function hapus($id){
		$where = array('id_materi_ajar_tanya' => $id);
		$this->model_materi_ajar_tanya->hapus_data($where,'t_materi_ajar_tanya');
		redirect('materi_ajar_tanya/index');
	}
 
	function edit($id_materi_ajar_tanya){
		$where = array('id_download' => $id_materi_ajar_tanya);
		$data['materi_ajar_edit'] = $this->model_materi_ajar->edit_data($where,'t_download')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_ajar_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_materi_ajar_tanya = $this->input->post('id_materi_ajar_tanya');
		$id_guru = $this->input->post('pertanyaan');
		$isi = $this->input->post('status');
		$now = date("Y-m-d", time());

		$data = array(
			'pertanyaan'  => $pertanyaan,
			'tanggal'  => $now,
			'satus'  => $s
		);

	$where = array(
		'id_materi_ajar_tanya' => $id_materi_ajar_tanya
	);

	$this->model_materi_ajar_tanya->update_data($where,$data,'t_materi_ajar_tanya');
	redirect('materi_ajar_tanya/index');
	}

}
