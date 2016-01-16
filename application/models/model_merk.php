<?php


class Model_merk extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	
	function getAll() {
        $this->db->select('merk.*'); 
		$this->db->from('merk');   
		 
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
		}
    }
	
    function insert($data) {
        $insert = $this->db->insert('merk', $data); //nama tabel, terus data yang mo di masukkan
        return $insert;
    }
	
	function get_by_id($id){
        $this->db->where('id_merk',$id);
        $query=$this->db->get('merk');
        return $query->result();
    }

    function update($id, $data) {
        $this->db->where('id_merk', $id);
        $update = $this->db->update('merk', $data);
        return $update;
    }

    function delete($id) {
		$this->db->delete('merk', array('id_merk' => $id)); 
    }
 
   
    

}

?>
