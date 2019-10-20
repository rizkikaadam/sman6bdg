<?php 

class Model_pesan_alumni extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_pesan_alumni');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data_home(){
		$sql="	SELECT t_pesan_alumni.`pesan`, t_pesan_alumni.`tanggal`, t_member.`nama`
				FROM t_pesan_alumni
				INNER JOIN t_member ON t_member.`id_member`=t_pesan_alumni.`id_member`";
		return $this->db->query($sql);

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