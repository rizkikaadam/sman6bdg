<?php 

class Model_galeri_foto extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_galeri');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data_album(){
		return $this->db->get('t_galeri_album',4);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}