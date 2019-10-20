<?php 

class Model_news extends CI_Model{
	function tampil_data(){
		$this->db->order_by('postdate', 'DESC');
		return $this->db->get('t_news');
	}

	function tampil_data_list(){
		$this->db->order_by('postdate', 'ASC');
		return $this->db->get('t_news',5);
	}

	function tampil_data_home(){
		$this->db->order_by('postdate', 'DESC');
		return $this->db->get('t_news',2);	
	}

	function tampil_data_detail($id){
		$sql="	SELECT t_news.`subject` AS judul, t_news.`isi` AS isi, t_member.`nama` AS nama
				FROM t_news
				INNER JOIN t_user ON t_news.`id_user`=t_user.`id_user`
				INNER JOIN t_member ON t_member.`id_member`=t_user.`id_member`
				WHERE t_news.`id_news`='$id'";
		return $this->db->query($sql);	
	}

	function tampil_data_komentar($id){
		$sql="	SELECT *
				FROM t_news_kom
				WHERE id_news='$id'";
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