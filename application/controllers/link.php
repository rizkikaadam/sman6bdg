<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_link');
		$this->load->helper('url');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_link'] = $this->model_link->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_link_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_link_input');
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['link1'] = $this->model_link->tampil_data_link1()->result();
		$data['link2'] = $this->model_link->tampil_data_link2()->result();
		$data['link3'] = $this->model_link->tampil_data_link3()->result();
		$data['link4'] = $this->model_link->tampil_data_link4()->result();
		$data['link5'] = $this->model_link->tampil_data_link5()->result();
		$data['link6'] = $this->model_link->tampil_data_link6()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_link',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_link = $this->input->post('id_link');
		$alamat = $this->input->post('alamat');
		$ket = $this->input->post('ket');
		$jenis = $this->input->post('jenis');
		$id_user = $this->input->post('id_user');

		$data = array(
			'id_link' => $id_link,
			'alamat'  => $alamat,
			'ket'  => $ket,
			'jenis'  => $jenis,
			'id_user'  => $id_user
			);
		$this->model_link->input_data($data,'t_link');
		redirect('link/index');
	}

	function hapus($id){
		$where = array('id_link' => $id);
		$this->model_link->hapus_data($where,'t_link');
		redirect('link/index');
	}
 
	function edit($id_link){
		$where = array('id_link' => $id_link);
		$data['t_link'] = $this->model_link->edit_data($where,'t_link')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_link_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_link = $this->input->post('id_link');
		$alamat = $this->input->post('alamat');
		$ket = $this->input->post('ket');
		$jenis = $this->input->post('jenis');
		$id_user = $this->input->post('id_user');

	$data = array(
		'alamat'  => $alamat,
		'ket'  => $ket,
		'jenis'  => $jenis,
		'id_user'  => $id_user
	);

	$where = array(
		'id_link' => $id_link
	);

	$this->model_link->update_data($where,$data,'t_link');
	redirect('link/index');
	}

}
