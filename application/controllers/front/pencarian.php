<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pencarian extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front'); 
		$this->load->helper('url');
	}
	
	function index(){
		
		 
		$data['cari'] = $this->input->post('cari');   
		$data['jenis'] = $this->model_front->get_all_jenis();
		$data['merk'] = $this->model_front->get_all_merk();
		$data['toko'] = $this->model_front->get_all_toko();
		$data['sepatu']=$this->model_front->cari($data['cari']);
		
		$data['nama'] = '- Cari : '.$data['cari'];   
		
		$this->load->view('front/layout/view_header',$data);
		$this->load->view('front/layout/view_menu',$data);
		$this->load->view('front/view_katalog',$data);
		$this->load->view('front/layout/view_footer');
		 
		 
		
	}
	
	 
	 
	

}
