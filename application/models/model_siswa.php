<?php 

class Model_siswa extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_siswa');
	}

	function tampil_data_home(){
		$sql="	SELECT t_member.nama, t_kelas.nama as kelas, t_member.email
				FROM t_siswa
				INNER JOIN t_member ON t_member.`id_member`=t_siswa.`id_member`
				INNER JOIN t_kelas_detail ON t_kelas_detail.`id_kelas_detail`=t_siswa.`id_kelas_detail`
				INNER JOIN t_kelas ON t_kelas_detail.`id_kelas`=t_kelas.`id_kelas`
				WHERE t_siswa.`id_kelas_detail`=1";
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