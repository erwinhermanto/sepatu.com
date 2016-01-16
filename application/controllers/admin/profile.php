<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->model('Model_user','model_user');
		$this->load->helper('url');
	}
	
	function index(){
		
		if($this->session->userdata('id_user'))
		{
			$id = $this->session->userdata('id_user');
			$data['data']=$this->model_user->get_by_id($id);
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_profile',$data);
			$this->load->view('admin/layout/view_footer');
		}
		else
		{
			redirect(base_url().'login');
		}
	}
	
	 
	 
	function update(){
		
		if($this->session->userdata('id_user'))
		{
			
			$data['id_user']=$this->input->post('id'); 
			$data['username'] = $this->input->post('username');  
			$data['password'] = md5($this->input->post('password'));   
				
			$this->model_user->update($data['id_user'], $data);
			
			redirect(base_url().'admin/home');
		}
		else
		{
			redirect(base_url().'login');
		}
		
		  
	}
	
	 
	 
	

}
