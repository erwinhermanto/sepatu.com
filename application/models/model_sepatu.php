<?php


class Model_sepatu extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	
	function getAll() {
        $this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		
		if($this->session->userdata('level') == 'toko')
		{	
			$this->db->where('sepatu.id_toko', $this->session->userdata('id_toko')); 
		}
		 
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
		}
    }
	
    function insert($data) {
        $insert = $this->db->insert('sepatu', $data); //nama tabel, terus data yang mo di masukkan
        return $insert;
    }
	
	function get_by_id($id){
        $this->db->where('id_sepatu',$id);
        $query=$this->db->get('sepatu');
        return $query->result();
    }

    function update($id, $data) {
        $this->db->where('id_sepatu', $id);
        $update = $this->db->update('sepatu', $data);
        return $update;
    }

    function delete($id) {
		$this->db->delete('sepatu', array('id_sepatu' => $id)); 
    }
 
   
    

}

?>
