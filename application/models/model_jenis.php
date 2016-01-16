<?php


class Model_jenis extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	
	function getAll() {
        $this->db->select('jenis.*'); 
		$this->db->from('jenis');   
		 
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
		}
    }
	
    function insert($data) {
        $insert = $this->db->insert('jenis', $data); //nama tabel, terus data yang mo di masukkan
        return $insert;
    }
	
	function get_by_id($id){
        $this->db->where('id_jenis',$id);
        $query=$this->db->get('jenis');
        return $query->result();
    }

    function update($id, $data) {
        $this->db->where('id_jenis', $id);
        $update = $this->db->update('jenis', $data);
        return $update;
    }

    function delete($id) {
		$this->db->delete('jenis', array('id_jenis' => $id)); 
    }
 
   
    

}

?>
