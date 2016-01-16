<?php

Class Model_login extends CI_Model {
	function __construct(){
		parent::__construct();	
	}
	
	 
	function cek_login($username,$password) {
		
		$this->db->flush_cache();

		$this->db->select('user.*, toko.nama_toko');

		$this->db->from('user');
		
		$this->db->join('toko', 'toko.id_toko = user.id_toko','left');
		 
		$this->db->where('username', $username);

		$this->db->where('password', ($password));

		return $this->db->get();
	
	}
}

?>