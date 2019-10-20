<?php 

class Model_link extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_link');
	}

	function tampil_data_home(){
		return $this->db->get('t_link', 5);
	}

	function tampil_data_link1(){
		$sql="	SELECT t_link.`alamat`, t_link.`ket`
				FROM t_link
				INNER JOIN t_kategori ON t_link.`id_kategori`=t_kategori.`id_kategori`
				WHERE t_kategori.`id_kategori`='1'";
		return $this->db->query($sql);
	}

	function tampil_data_link2(){
		$sql="	SELECT t_link.`alamat`, t_link.`ket`
				FROM t_link
				INNER JOIN t_kategori ON t_link.`id_kategori`=t_kategori.`id_kategori`
				WHERE t_kategori.`id_kategori`='2'";
		return $this->db->query($sql);
	}

	function tampil_data_link3(){
		$sql="	SELECT t_link.`alamat`, t_link.`ket`
				FROM t_link
				INNER JOIN t_kategori ON t_link.`id_kategori`=t_kategori.`id_kategori`
				WHERE t_kategori.`id_kategori`='3'";
		return $this->db->query($sql);
	}

	function tampil_data_link4(){
		$sql="	SELECT t_link.`alamat`, t_link.`ket`
				FROM t_link
				INNER JOIN t_kategori ON t_link.`id_kategori`=t_kategori.`id_kategori`
				WHERE t_kategori.`id_kategori`='4'";
		return $this->db->query($sql);
	}

	function tampil_data_link5(){
		$sql="	SELECT t_link.`alamat`, t_link.`ket`
				FROM t_link
				INNER JOIN t_kategori ON t_link.`id_kategori`=t_kategori.`id_kategori`
				WHERE t_kategori.`id_kategori`='5'";
		return $this->db->query($sql);
	}

	function tampil_data_link6(){
		$sql="	SELECT t_link.`alamat`, t_link.`ket`
				FROM t_link
				INNER JOIN t_kategori ON t_link.`id_kategori`=t_kategori.`id_kategori`
				WHERE t_kategori.`id_kategori`='6'";
		return $this->db->query($sql);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
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