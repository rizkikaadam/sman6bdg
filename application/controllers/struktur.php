<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');

	}

	function index(){
		$this->load->view('umum/v_header');
		$this->load->view('umum/v_menu');
		$this->load->view('umum/v_konten_kiri');
		$this->load->view('umum/v_struktur');
		$this->load->view('umum/v_footer');
	}

}
?>
