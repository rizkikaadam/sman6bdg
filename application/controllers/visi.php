<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->model('model_profil');
		$this->load->model('model_link');
		$this->load->model('model_info');

	}

	function index(){
		$data['t_profil'] = $this->model_profil->tampil_data_visi()->result();
		$data['t_link'] = $this->model_link->tampil_data_home()->result();
		$data['t_info'] = $this->model_info->tampil_data_home()->result();
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri',$data);
		$this->load->view('umum/v_visi',$data);
		$this->load->view('umum/v_footer');
	}

}
?>
