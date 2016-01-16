<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->helper('url');
	}
	
	public function index()
	{
		if($this->session->userdata('id_user'))
		{
			$data['message'] = '';
	  
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu');
			$this->load->view('admin/view_home',$data);
			$this->load->view('admin/layout/view_footer');
		}
		else
		{
			redirect(base_url().'login');
		}
		
	}
	 
	

}
