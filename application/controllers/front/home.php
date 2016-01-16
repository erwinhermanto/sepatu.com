<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data['jenis'] = $this->model_front->get_all_jenis();
		$data['merk'] = $this->model_front->get_all_merk();
		$data['toko'] = $this->model_front->get_all_toko();
		$data['slider'] = $this->model_front->get_all_slider();
		$data['sepatu'] = $this->model_front->get_all_sepatu();
		
		$data['cari'] = '';
		$this->load->view('front/layout/view_header',$data);
		$this->load->view('front/layout/view_menu',$data);
		$this->load->view('front/view_home',$data);
		$this->load->view('front/layout/view_footer');
	}
	 
	

}
