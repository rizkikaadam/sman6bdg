<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umum extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('model_link');
		$this->load->model('model_info');
		$this->load->model('model_news');
		$this->load->model('model_materi_ajar');
		$this->load->model('model_artikel');
		$this->load->model('model_galeri_foto');
		$this->load->library('calendar');

	}

	function index(){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_news'] = $this->model_news->tampil_data_home()->result();
		$data['t_news_list'] = $this->model_news->tampil_data_list()->result();
		$data['t_artikel'] = $this->model_artikel->tampil_data_home()->result();
		$data['t_artikel_list'] = $this->model_artikel->tampil_data_list()->result();
		$data['t_download'] = $this->model_materi_ajar->tampil_data()->result();
		$data['t_foto'] = $this->model_galeri_foto->tampil_data()->result();
		$data['t_kalender'] = $this->calendar->generate();
		//$data['data'] = array_merge($t_link['t_link'], $t_info['t_info']);
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_home',$data);
		$this->load->view('umum/v_konten_kanan',$data);
		$this->load->view('umum/v_footer');
	}
 
	function tampil_berita($id_news){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_detail'] = $this->model_news->tampil_data_detail($id_news)->result();
		$data['t_komentar'] = $this->model_news->tampil_data_komentar($id_news)->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_detail',$data);
		$this->load->view('umum/v_footer');
	}
 
	function tampil_artikel($id_artikel){
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$data['t_detail'] = $this->model_artikel->tampil_data_detail($id_artikel)->result();
		$data['t_komentar'] = $this->model_artikel->tampil_data_komentar($id_artikel)->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_detail',$data);
		$this->load->view('umum/v_footer');
	}

}
?>
