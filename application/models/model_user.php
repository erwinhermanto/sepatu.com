<?php


class Model_user extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	
	function getAll() {
        $this->db->select('user.*, toko.nama_toko'); 
		$this->db->from('user');    
		$this->db->join('toko', 'user.id_toko = toko.id_toko'); 
		 
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
		}
    }
	
    function insert($data) {
        $insert = $this->db->insert('user', $data); //nama tabel, terus data yang mo di masukkan
        return $insert;
    }
	
	function get_by_id($id){
        $this->db->where('id_user',$id);
        $query=$this->db->get('user');
        return $query->result();
    }

    function update($id, $data) {
        $this->db->where('id_user', $id);
        $update = $this->db->update('user', $data);
        return $update;
    }

    function delete($id) {
		$this->db->delete('user', array('id_user' => $id)); 
    }
 
   
    

}

?>
