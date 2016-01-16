<?php


class Model_front extends CI_Model {

    function __construct() {
        parent::__construct();
    }

	
	function get_all_jenis() {
        $query = $this->db->get('jenis');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	function get_all_merk() {
        $query = $this->db->get('merk');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	function get_all_slider() {
        $query = $this->db->get('slider');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	function get_all_toko() {
        $query = $this->db->get('toko');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	function get_nama_toko($toko){
		$this->db->select('toko.*'); 
		$this->db->from('toko');    
		$this->db->where('toko.id_toko', $toko);   
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
	}
	
	function get_nama_jenis($jenis){
		$this->db->select('jenis.*'); 
		$this->db->from('jenis');    
		$this->db->where('jenis.id_jenis', $jenis);   
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
	}
	 
	function get_nama_merk($merk){
		$this->db->select('merk.*'); 
		$this->db->from('merk');    
		$this->db->where('merk.id_merk', $merk);   
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
	}
	
	function get_all_sepatu() {
		
		$this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		$this->db->group_by('nama_sepatu');  
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	function get_all_sepatu_where_toko($toko) {
		
		$this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		$this->db->where('sepatu.id_toko', $toko); 
		$this->db->group_by('nama_sepatu');  
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	
	function get_all_sepatu_where_merk($merk) {
		
		$this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		$this->db->where('sepatu.id_merk', $merk); 
		$this->db->group_by('nama_sepatu');  
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	function get_all_sepatu_where_jenis($jenis) {
		
		$this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		$this->db->where('sepatu.id_jenis', $jenis); 
		$this->db->group_by('nama_sepatu');  
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	
	function get_detail_sepatu($nama) {
		
		$this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		$this->db->where('nama_sepatu', $nama);  
		$this->db->limit(1);  
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	function get_perbandingan_sepatu_all($nama) {
		 
		$this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko, toko.alamat, toko.latitude, toko.longitude'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		$this->db->where('sepatu.nama_sepatu', $nama);   
		$this->db->order_by('sepatu.id_sepatu','ASC');
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
	
	function get_perbandingan_sepatu($nama) {
		 
		$this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko, toko.alamat, toko.latitude, toko.longitude'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		$this->db->where('sepatu.nama_sepatu', $nama);  
		$this->db->order_by('sepatu.harga','ASC');
		$this->db->limit(1);
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
 
	function cari($cari) {
		 
		$this->db->select('sepatu.*, merk.nama_merk, jenis.nama_jenis, toko.nama_toko, toko.alamat, toko.latitude, toko.longitude'); 
		$this->db->from('sepatu');   
		$this->db->join('merk', 'sepatu.id_merk = merk.id_merk');
		$this->db->join('jenis', 'sepatu.id_jenis = jenis.id_jenis');
		$this->db->join('toko', 'sepatu.id_toko = toko.id_toko'); 
		$this->db->where("sepatu.nama_sepatu like '%$cari%'");  
		$this->db->or_where("jenis.nama_jenis like '%$cari%'");  
		$this->db->or_where("merk.nama_merk like '%$cari%'");  
		// $this->db->or_where("toko.nama_toko like '%$cari%'");  
		// $this->db->or_where("toko.alamat like '%$cari%'");  
		$this->db->group_by('nama_sepatu');  
		$this->db->order_by('sepatu.harga','ASC');
		
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    

}

?>
