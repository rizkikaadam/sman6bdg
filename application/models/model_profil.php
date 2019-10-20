<?php 

class Model_profil extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_pos_menu');
	}
	
	function tampil_data_visi(){
		$sql="SELECT * FROM t_profil WHERE judul LIKE 'Visi,Misi,Strategi dan Tujuan '";
		return $this->db->query($sql);
	}

	function tampil_data_sejarah(){
		$sql="SELECT * FROM t_profil WHERE judul LIKE 'Sejarah Singkat'";
		return $this->db->query($sql);
	}

	function tampil_data_sarana(){;
		return $this->db->get('t_sarana');
	}

	function tampil_data_proker(){
		$sql="SELECT * FROM t_profil WHERE judul LIKE 'Program Kerja'";
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