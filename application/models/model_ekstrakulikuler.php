<?php 

class Model_ekstrakulikuler extends CI_Model{
	function tampil_data(){
		return $this->db->get('t_ekstrakulikuler');
	}
}