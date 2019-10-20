<?php 

class Model_opini extends CI_Model{
	function tampil_data(){
		$sql="	SELECT t_member.`nama` as nama, t_project.`judul`, t_project.`deskripsi`
				FROM t_project
				INNER JOIN t_member ON t_member.`id_member`=t_project.`id_member`
				ORDER BY t_project.`id_project` ASC
				LIMIT 5 ";
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