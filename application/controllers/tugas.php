<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tugas extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_tugas');
		$this->load->helper('url');

	}

	function index(){
		$data['t_tugas'] = $this->model_tugas->tampil_data()->result();
		$this->load->view('v_tugas_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_tugas_input');
	}

	function tambah_aksi(){
		$id_tugas = $this->input->post('id_tugas');
		$id_guru = $this->input->post('id_guru');
		$tgl_kumpul = $this->input->post('tgl_kumpul');
		$isi = $this->input->post('isi');
		$jenis = $this->input->post('jenis');
		$file = $this->input->post('file');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_tugas' => $id_tugas,
			'id_guru'  => $id_guru,
			'tgl_kumpul'  => $tgl_kumpul,
			'isi'  => $isi,
			'jenis'  => $jenis,
			'file'  => $file
			);
		$this->model_tugas->input_data($data,'t_tugas');
		redirect('tugas/index');
	}

	function hapus($id){
		$where = array('id_tugas' => $id);
		$this->model_tugas->hapus_data($where,'t_tugas');
		redirect('tugas/index');
	}
 
	function edit($id_tugas){
		$where = array('id_tugas' => $id_tugas);
		$data['t_tugas'] = $this->model_tugas->edit_data($where,'t_tugas')->result();
		$this->load->view('v_tugas_edit',$data);
	}

	function update(){
		$id_tugas = $this->input->post('id_tugas');
		$id_guru = $this->input->post('id_guru');
		$tgl_kumpul = $this->input->post('tgl_kumpul');
		$isi = $this->input->post('isi');
		$jenis = $this->input->post('jenis');
		$file = $this->input->post('file');

		$data = array(
			'id_guru'  => $id_guru,
			'tgl_kumpul'  => $tgl_kumpul,
			'isi'  => $isi,
			'jenis'  => $jenis,
			'file'  => $file
		);

	$where = array(
		'id_tugas' => $id_tugas
	);

	$this->model_tugas->update_data($where,$data,'t_tugas');
	redirect('tugas/index');
	}

}
