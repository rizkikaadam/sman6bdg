<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_news');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_news'] = $this->model_news->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_news_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_news_input');
		$this->load->view('admin/footer');
	}

	function tampil_umum(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_news'] = $this->model_news->tampil_data()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_berita',$data);
		$this->load->view('umum/v_footer');
	}

	function tambah_aksi(){
		$id_news = $this->input->post('id_news');
		$subject = $this->input->post('subject');
		$isi = $this->input->post('isi');
		$id_user = $this->input->post('id_user');
		$visit = $this->input->post('visit');
		$now = date("Y-m-d", time());

		$data = array(
			'id_news' => $id_news,
			'subject'  => $subject,
			'isi'  => $isi,
			'id_user'  => $id_user,
			'postdate'  => $now,
			'visit'  => $visit
			);
		$this->model_news->input_data($data,'t_news');
		redirect('news/index');
	}

	function hapus($id){
		$where = array('id_news' => $id);
		$this->model_news->hapus_data($where,'t_news');
		redirect('news/index');
	}
 
	function edit($id_news){
		$where = array('id_news' => $id_news);
		$data['t_news'] = $this->model_news->edit_data($where,'t_news')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_news_edit',$data);
		$this->load->view('admin/footer');
	}

	function update(){
		$id_news = $this->input->post('id_news');
		$subject = $this->input->post('subject');
		$isi = $this->input->post('isi');
		$id_user = $this->input->post('id_user');
		$visit = $this->input->post('visit');
		$now = date("Y-m-d", time());

	$data = array(
		'subject'  => $subject,
		'isi'  => $isi,
		'id_user'  => $id_user,
		'postdate'  => $now,
		'visit'  => $visit
	);

	$where = array(
		'id_news' => $id_news
	);

	$this->model_news->update_data($where,$data,'t_news');
	redirect('news/index');
	}

}
