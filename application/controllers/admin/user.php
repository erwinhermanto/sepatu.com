<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->model('Model_user','model_user');
		$this->load->helper('url');
	}
	
	function index(){
		
		if($this->session->userdata('id_user'))
		{
			
			$data['data']=$this->model_user->getAll();
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu');
			$this->load->view('admin/view_user',$data);
			$this->load->view('admin/layout/view_footer');
		}
		else
		{
			redirect(base_url().'login');
		}
	}
	
	function tambah(){
		
		if($this->session->userdata('id_user'))
		{
			
			$data['toko']=$this->model_front->get_all_toko(); 
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_user_tambah',$data);
			$this->load->view('admin/layout/view_footer');
		}
		else
		{
			redirect(base_url().'login');
		}
	}
	
	function insert(){
		
		if($this->session->userdata('id_user'))
		{
			
			
			$data['id_toko'] = $this->input->post('id_toko');   
			$data['username'] = $this->input->post('username');  
			$data['password'] = $this->input->post('password'); 
			$data['keterangan'] = $this->input->post('keterangan');  
			$data['level'] = $this->input->post('level');    
			  
			$this->model_user->insert($data); 
			
			redirect(base_url().'admin/user');
		}
		else
		{
			redirect(base_url().'login');
		}
		 

		 
		 
	}
	 
	
	function ubah($id){ 
		
		if($this->session->userdata('id_user'))
		{
			
			$data['toko']=$this->model_front->get_all_toko(); 
			$data['data']=$this->model_user->get_by_id($id);
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_user_edit',$data);
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
				
			$data['id_toko'] = $this->input->post('id_toko');   
			$data['username'] = $this->input->post('username');  
			$data['password'] = md5($this->input->post('password'));  
			$data['keterangan'] = $this->input->post('keterangan');  
			$data['level'] = $this->input->post('level');    
				
			$this->model_user->update($data['id_user'], $data);
			
			redirect(base_url().'admin/user');
		}
		else
		{
			redirect(base_url().'login');
		}
		
		 
	 
		
		 
	}
	
	function delete($id){ 
		
		if($this->session->userdata('id_user'))
		{
			
			$this->model_user->delete($id); 
			redirect(base_url().'admin/user');
		}
		else
		{
			redirect(base_url().'login');
		}
	}
	 
	

}
