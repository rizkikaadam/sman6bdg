<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Ekstrakulikuler extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();		
			$this->load->helper('url');
			$this->load->model('model_link');
			$this->load->model('model_info');
			$this->load->model('model_ekstrakulikuler');
		}


		function index(){
			$data['t_link'] = $this->model_link->tampil_data_home()->result();
			$data['t_info'] = $this->model_info->tampil_data_home()->result();
			$data['t_ekstrakulikuler'] = $this->model_ekstrakulikuler->tampil_data()->result();
			$this->load->view('umum/v_header');
			$this->load->view('umum/v_menu');
			$this->load->view('umum/v_konten_kiri',$data);
			$this->load->view('umum/v_ekstrakulikuler',$data);
			$this->load->view('umum/v_footer');
		}
	}
?>