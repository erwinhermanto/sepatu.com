<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Toko extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->helper('url');
	}
	
	public function detail()
	{
		
		$toko = $this->uri->segment(4);
		
		$data['jenis'] = $this->model_front->get_all_jenis();
		$data['merk'] = $this->model_front->get_all_merk();
		$data['toko'] = $this->model_front->get_all_toko(); 
		$data['sepatu'] = $this->model_front->get_all_sepatu_where_toko($toko);
		
		$name = $this->model_front->get_nama_toko($toko);
		foreach ($name as $row):  
			$data['nama'] = '- Toko : '.$row->nama_toko;   
		endforeach;
		
		$data['cari'] = '';
		$this->load->view('front/layout/view_header',$data);
		$this->load->view('front/layout/view_menu',$data);
		$this->load->view('front/view_katalog',$data);
		$this->load->view('front/layout/view_footer');
	}
	 
	

}
