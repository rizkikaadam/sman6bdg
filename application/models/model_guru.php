<?php 

class Model_guru extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_guru');
	}

	function tampil_data_home(){
		$sql="SELECT t_guru.id_guru, t_member.`nama`, t_staf.`nip`
			  FROM t_guru
			  INNER JOIN t_staf ON t_guru.id_staf=t_staf.id_staf 
			  INNER JOIN t_member ON t_member.id_member=t_staf.id_member
			  ORDER BY t_staf.`nip` ASC";
		return $this->db->query($sql);
	}

	function tampil_data_staf(){
		$sql="SELECT t_staf_tu.id_staf_tu, t_member.`nama`, t_staf.`nip`, t_staf_tu.`tugas`, t_staf_tu.`pangkat`
			  FROM t_staf_tu
			  INNER JOIN t_staf ON t_staf_tu.id_staf=t_staf.id_staf 
			  INNER JOIN t_member ON t_member.id_member=t_staf.id_member
			  ORDER BY t_staf.`nip` ASC";
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