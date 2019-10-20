<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_siswa');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');


	}

	function index(){
		$data['t_siswa'] = $this->model_siswa->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_siswa_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_siswa_input');
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_siswa'] = $this->model_siswa->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_siswa',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_siswa = $this->input->post('id_siswa');
		$id_member = $this->input->post('id_member');
		$agama = $this->input->post('agama');
		$tgl_input = $this->input->post('tgl_input');
		$sttb = $this->input->post('sttb');
		$nem = $this->input->post('nem');
		$wali = $this->input->post('wali');
		$id_kelas_detail = $this->input->post('id_kelas_detail');
		$now = date("Y-m-d", time());

		$data = array(
			'id_siswa' => $id_siswa,
			'id_member'  => $id_member,
			'agama'  => $agama,
			'tgl_input'  => $now,
			'sttb'  => $sttb,
			'nem'  => $nem,
			'wali'  => $wali,
			'id_kelas_detail'  => $id_kelas_detail
			);
		$this->model_siswa->input_data($data,'t_siswa');
		redirect('siswa/index');
	}

	function hapus($id){
		$where = array('id_siswa' => $id);
		$this->model_siswa->hapus_data($where,'t_siswa');
		redirect('siswa/index');
	}
 
	function edit($id_siswa){
		$where = array('id_siswa' => $id_siswa);
		$data['t_siswa'] = $this->model_siswa->edit_data($where,'t_siswa')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_siswa_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_siswa = $this->input->post('id_siswa');
		$id_member = $this->input->post('id_member');
		$agama = $this->input->post('agama');
		$sttb = $this->input->post('sttb');
		$nem = $this->input->post('nem');
		$wali = $this->input->post('wali');
		$id_kelas_detail = $this->input->post('id_kelas_detail');
		$now = date("Y-m-d", time());
		
		$data = array(
			'id_member'  => $id_member,
			'agama'  => $agama,
			'tgl_input'  => $now,
			'sttb'  => $sttb,
			'nem'  => $nem,
			'wali'  => $wali,
			'id_kelas_detail'  => $id_kelas_detail
		);

	$where = array(
		'id_siswa' => $id_siswa
	);

	$this->model_siswa->update_data($where,$data,'t_siswa');
	redirect('siswa/index');
	}

}