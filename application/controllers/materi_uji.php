<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi_uji extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_materi_uji');
		$this->load->model('model_materi_ajar');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_materi_uji'] = $this->model_materi_uji->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_uji_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_uji_input');
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_materi_uji'] = $this->model_materi_uji->tampil_data()->result();
		$data['t_materi_ajar'] = $this->model_materi_ajar->tampil_data()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_materi_Uji',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_materi_uji_tanya = $this->input->post('id_materi_uji_tanya');
		$id_guru = $this->input->post('pertanyaan');
		$isi = $this->input->post('status');
		$now = date("Y-m-d", time());

		$data = array(
			'id_materi_uji_tanya' => $id_materi_uji_tanya,
			'pertanyaan'  => $pertanyaan,
			'tanggal'  => $now,
			'satus'  => $status
			);
		$this->model_materi_uji_tanya->input_data($data,'t_materi_uji_tanya');
		redirect('materi_uji_tanya/index');
	}

	function hapus($id){
		$where = array('id_materi_uji_tanya' => $id);
		$this->model_materi_uji_tanya->hapus_data($where,'t_materi_uji_tanya');
		redirect('materi_uji_tanya/index');
	}
 
	function edit($id_materi_uji_tanya){
		$where = array('id_download' => $id_materi_uji_tanya);
		$data['materi_uji_edit'] = $this->model_materi_uji->edit_data($where,'t_download')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_materi_uji_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_materi_uji_tanya = $this->input->post('id_materi_uji_tanya');
		$id_guru = $this->input->post('pertanyaan');
		$isi = $this->input->post('status');
		$now = date("Y-m-d", time());

		$data = array(
			'pertanyaan'  => $pertanyaan,
			'tanggal'  => $now,
			'satus'  => $s
		);

	$where = array(
		'id_materi_uji_tanya' => $id_materi_uji_tanya
	);

	$this->model_materi_uji_tanya->update_data($where,$data,'t_materi_uji_tanya');
	redirect('materi_uji_tanya/index');
	}

}
