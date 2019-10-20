<?php 

class Model_silabus extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_silabus');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function tampil_data_semester1(){
		$sql="SELECT t_silabus.`id_silabus`,t_silabus.`file`,t_silabus.`tanggal`,t_silabus.`visit`,t_pelajaran.`pelajaran`
			  FROM t_silabus
			  INNER JOIN t_pelajaran ON t_silabus.`id_pelajaran`=t_pelajaran.`id_pelajaran`
			  INNER JOIN t_semester ON t_silabus.`id_semester`=t_semester.`id_semester`
			  WHERE t_semester.`id_semester`='1'";
		return $this->db->query($sql);
	}

	function tampil_data_semester2(){
		$sql="SELECT t_silabus.`id_silabus`,t_silabus.`file`,t_silabus.`tanggal`,t_silabus.`visit`,t_pelajaran.`pelajaran`
			  FROM t_silabus
			  INNER JOIN t_pelajaran ON t_silabus.`id_pelajaran`=t_pelajaran.`id_pelajaran`
			  INNER JOIN t_semester ON t_silabus.`id_semester`=t_semester.`id_semester`
			  WHERE t_semester.`id_semester`='2'";
		return $this->db->query($sql);
	}

	function tampil_data_semester3(){
		$sql="SELECT t_silabus.`id_silabus`,t_silabus.`file`,t_silabus.`tanggal`,t_silabus.`visit`,t_pelajaran.`pelajaran`
			  FROM t_silabus
			  INNER JOIN t_pelajaran ON t_silabus.`id_pelajaran`=t_pelajaran.`id_pelajaran`
			  INNER JOIN t_semester ON t_silabus.`id_semester`=t_semester.`id_semester`
			  WHERE t_semester.`id_semester`='3'";
		return $this->db->query($sql);
	}

	function tampil_data_semester4(){
		$sql="SELECT t_silabus.`id_silabus`,t_silabus.`file`,t_silabus.`tanggal`,t_silabus.`visit`,t_pelajaran.`pelajaran`
			  FROM t_silabus
			  INNER JOIN t_pelajaran ON t_silabus.`id_pelajaran`=t_pelajaran.`id_pelajaran`
			  INNER JOIN t_semester ON t_silabus.`id_semester`=t_semester.`id_semester`
			  WHERE t_semester.`id_semester`='4'";
		return $this->db->query($sql);
	}

	function tampil_data_semester5(){
		$sql="SELECT t_silabus.`id_silabus`,t_silabus.`file`,t_silabus.`tanggal`,t_silabus.`visit`,t_pelajaran.`pelajaran`
			  FROM t_silabus
			  INNER JOIN t_pelajaran ON t_silabus.`id_pelajaran`=t_pelajaran.`id_pelajaran`
			  INNER JOIN t_semester ON t_silabus.`id_semester`=t_semester.`id_semester`
			  WHERE t_semester.`id_semester`='5'";
		return $this->db->query($sql);
	}

	function tampil_data_semester6(){
		$sql="SELECT t_silabus.`id_silabus`,t_silabus.`file`,t_silabus.`tanggal`,t_silabus.`visit`,t_pelajaran.`pelajaran`
			  FROM t_silabus
			  INNER JOIN t_pelajaran ON t_silabus.`id_pelajaran`=t_pelajaran.`id_pelajaran`
			  INNER JOIN t_semester ON t_silabus.`id_semester`=t_semester.`id_semester`
			  WHERE t_semester.`id_semester`='6'";
		return $this->db->query($sql);
	}

	function tampil_data_semester7(){
		$sql="SELECT t_silabus.`id_silabus`,t_silabus.`file`,t_silabus.`tanggal`,t_silabus.`visit`,t_pelajaran.`pelajaran`
			  FROM t_silabus
			  INNER JOIN t_pelajaran ON t_silabus.`id_pelajaran`=t_pelajaran.`id_pelajaran`
			  INNER JOIN t_semester ON t_silabus.`id_semester`=t_semester.`id_semester`
			  WHERE t_semester.`id_semester`='8'";
		return $this->db->query($sql);
	}

	function tampil_data_semester8(){
		$sql="SELECT t_silabus.`id_silabus`,t_silabus.`file`,t_silabus.`tanggal`,t_silabus.`visit`,t_pelajaran.`pelajaran`
			  FROM t_silabus
			  INNER JOIN t_pelajaran ON t_silabus.`id_pelajaran`=t_pelajaran.`id_pelajaran`
			  INNER JOIN t_semester ON t_silabus.`id_semester`=t_semester.`id_semester`
			  WHERE t_semester.`id_semester`='8'";
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