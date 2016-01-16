<?php


class Model_slider extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	
	function getAll() {
        $this->db->select('slider.*'); 
		$this->db->from('slider');   
		 
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
		}
    }
	
    function insert($data) {
        $insert = $this->db->insert('slider', $data); //nama tabel, terus data yang mo di masukkan
        return $insert;
    }
	
	function get_by_id($id){
        $this->db->where('id_slider',$id);
        $query=$this->db->get('slider');
        return $query->result();
    }

    function update($id, $data) {
        $this->db->where('id_slider', $id);
        $update = $this->db->update('slider', $data);
        return $update;
    }

    function delete($id) {
		$this->db->delete('slider', array('id_slider' => $id)); 
    }
 
   
    

}

?>
