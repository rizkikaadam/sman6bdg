<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_member');
		$this->load->helper('url');

	}

	function index(){
		$data['t_member'] = $this->model_member->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/menu');
		$this->load->view('admin/v_member_tampil',$data);
		$this->load->view('admin/footer');
	}

	function tambah(){
		$this->load->view('v_member_input');
	}

	function tambah_aksi(){
		$id_member = $this->input->post('id_member');
		$nama = $this->input->post('nama');
		$tgllahir = $this->input->post('tgllahir');
		$kelamin = $this->input->post('kelamin');
		$kerja = $this->input->post('kerja');
		$alamat = $this->input->post('alamat');
		$negara = $this->input->post('negara');
		$telp = $this->input->post('telp');
		$sekolah = $this->input->post('sekolah');
		$homepage = $this->input->post('homepage');
		$profil = $this->input->post('profil');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$kategori = $this->input->post('kategori');
		$status = $this->input->post('status');
		$tgllogin = $this->input->post('tgl_login');
		$ket = $this->input->post('ket');
		$blog = $this->input->post('blog');
		$totlogin = $this->input->post('totlogin');
		$tmplahir = $this->input->post('tmplahir');

		$data = array(
			'id_member' => $id_member,
			'alamat'  => $nama,
			'ket'  => $tgllahir,
			'kelamin'  => $kelamin,
			'kerja'  => $kerja,
			'alamat'  => $alamat,
			'negara'  => $negara,
			'telp'  => $telp,
			'sekolah'  => $sekolah,
			'homepage'  => $homepage,
			'profil'  => $profil,
			'username'  => $username,
			'password'  => $password,
			'email'  => $email,
			'kategori'  => $kategori,
			'status'  => $status,
			'tgllogin'  => $tgllogin,
			'ket'  => $ket,
			'blog'  => $blog,
			'totlogin'  => $totlogin,
			'tmplahir'  => $tmplahir
			);
		$this->model_member->input_data($data,'t_member');
		redirect('member/index');
	}

	function hapus($id){
		$where = array('id_member' => $id);
		$this->model_member->hapus_data($where,'t_member');
		redirect('member/index');
	}
 
	function edit($id_member){
		$where = array('id_member' => $id_member);
		$data['t_member'] = $this->model_member->edit_data($where,'t_member')->result();
		$this->load->view('v_member_edit',$data);
	}

	function update(){
		$id_member = $this->input->post('id_member');
		$nama = $this->input->post('nama');
		$tgllahir = $this->input->post('tgllahir');
		$kelamin = $this->input->post('kelamin');
		$kerja = $this->input->post('kerja');
		$alamat = $this->input->post('alamat');
		$negara = $this->input->post('negara');
		$telp = $this->input->post('telp');
		$sekolah = $this->input->post('sekolah');
		$homepage = $this->input->post('homepage');
		$profil = $this->input->post('profil');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$kategori = $this->input->post('kategori');
		$status = $this->input->post('status');
		$tgllogin = $this->input->post('tgl_login');
		$ket = $this->input->post('ket');
		$blog = $this->input->post('blog');
		$totlogin = $this->input->post('totlogin');
		$tmplahir = $this->input->post('tmplahir');

	$data = array(
		'alamat'  => $nama,
		'ket'  => $tgllahir,
		'kelamin'  => $kelamin,
		'kerja'  => $kerja,
		'alamat'  => $alamat,
		'negara'  => $negara,
		'telp'  => $telp,
		'sekolah'  => $sekolah,
		'homepage'  => $homepage,
		'profil'  => $profil,
		'username'  => $username,
		'password'  => $password,
		'email'  => $email,
		'kategori'  => $kategori,
		'status'  => $status,
		'tgllogin'  => $tgllogin,
		'ket'  => $ket,
		'blog'  => $blog,
		'totlogin'  => $totlogin,
		'tmplahir'  => $tmplahir
	);

	$where = array(
		'id_member' => $id_member
	);

	$this->model_member->update_data($where,$data,'t_member');
	redirect('member/index');
	}

}
