<?php 

class Model_artikel extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_artikel');
	}

	function tampil_data_list(){
		$this->db->order_by('id_artikel', 'ASC');
		return $this->db->get('t_artikel',3);
	}

	function tampil_data_detail($id){
		$sql="	SELECT t_artikel.`judul` AS judul, t_artikel.`isi` AS isi, t_member.`nama` AS nama
				FROM t_artikel
				INNER JOIN t_member ON t_member.`id_member`=t_artikel.`id_member`
				WHERE t_artikel.`id_artikel`='$id'";
		return $this->db->query($sql);	
	}

	function tampil_data_komentar($id){
		$sql="	SELECT *
				FROM t_artikel_komentar
				WHERE id_artikel_komentar='$id'";
		return $this->db->query($sql);	
	}

	function tampil_data_home(){
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('t_artikel',2);	
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