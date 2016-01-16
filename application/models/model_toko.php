<?php


class Model_toko extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	
	function getAll() {
        $this->db->select('toko.*'); 
		$this->db->from('toko');   
		 
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
		}
    }
	
    function insert($data) {
        $insert = $this->db->insert('toko', $data); //nama tabel, terus data yang mo di masukkan
        return $insert;
    }
	
	function get_by_id($id){
        $this->db->where('id_toko',$id);
        $query=$this->db->get('toko');
        return $query->result();
    }

    function update($id, $data) {
        $this->db->where('id_toko', $id);
        $update = $this->db->update('toko', $data);
        return $update;
    }

    function delete($id) {
		$this->db->delete('toko', array('id_toko' => $id)); 
    }
 
   
    

}

?>
