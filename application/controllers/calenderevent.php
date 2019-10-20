<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calenderevent extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_calenderevent');
		$this->load->helper('url');

	}

	function index(){
		$data['t_calenderevent'] = $this->model_calenderevent->tampil_data()->result();
		$this->load->view('v_calenderevent_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_calenderevent_input');
	}

	function tambah_aksi(){
		$id_calenderevent = $this->input->post('id_calenderevent');
		$date_start = $this->input->post('date_start');
		$date_end = $this->input->post('date_end');
		$eventTitle = $this->input->post('eventTitle');
		$eventDetail = $this->input->post('eventDetail');
		$color = $this->input->post('color');
		$status = $this->input->post('status');
		$file_id = $this->input->post('file_id');
		//$now = date("Y-m-d", time());

		$data = array(
			'id_calenderevent' => $id_calenderevent,
			'date_start'  => $date_start,
			'date_end'  => $date_end,
			'eventTitle'  => $eventTitle,
			'eventDetail'  => $eventDetail,
			'color'  => $color,
			'status'  => $status,
			'file_id'  => $file_id
			);
		$this->model_calenderevent->input_data($data,'t_calenderevent');
		redirect('calenderevent/index');
	}

	function hapus($id){
		$where = array('id_calenderevent' => $id);
		$this->model_calenderevent->hapus_data($where,'t_calenderevent');
		redirect('calenderevent/index');
	}
 
	function edit($id_calenderevent){
		$where = array('id_calenderevent' => $id_calenderevent);
		$data['t_calenderevent'] = $this->model_calenderevent->edit_data($where,'t_calenderevent')->result();
		$this->load->view('v_calenderevent_edit',$data);
	}

	function update(){
		$id_calenderevent = $this->input->post('id_calenderevent');
		$date_start = $this->input->post('date_start');
		$date_end = $this->input->post('date_end');
		$eventTitle = $this->input->post('eventTitle');
		$eventDetail = $this->input->post('eventDetail');
		$color = $this->input->post('color');
		$status = $this->input->post('status');
		$file_id = $this->input->post('file_id');
		
		$data = array(
			'date_start'  => $date_start,
			'date_end'  => $date_end,
			'eventTitle'  => $eventTitle,
			'eventDetail'  => $eventDetail,
			'color'  => $color,
			'status'  => $status,
			'file_id'  => $file_id
		);

	$where = array(
		'id_calenderevent' => $id_calenderevent
	);

	$this->model_calenderevent->update_data($where,$data,'t_calenderevent');
	redirect('calenderevent/index');
	}

}
s