<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jenis extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->model('Model_jenis','model_jenis');
		$this->load->helper('url');
	}
	
	function index(){
		
		if($this->session->userdata('id_user'))
		{
			$data['data']=$this->model_jenis->getAll();
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu');
			$this->load->view('admin/view_jenis',$data);
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
			$data['message']=""; 
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_jenis_tambah',$data);
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
			$data['nama_jenis'] = $this->input->post('nama_jenis');   
			$data['keterangan'] = $this->input->post('keterangan');  
			  
			$this->model_jenis->insert($data); 
			
			redirect(base_url().'admin/jenis');
		}
		else
		{
			redirect(base_url().'login');
		}
		  
		 
		
 
	}
	 
	
	function ubah($id){ 
	
		if($this->session->userdata('id_user'))
		{
			
			$data['message']="";
			$data['data']=$this->model_jenis->get_by_id($id);
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_jenis_edit',$data);
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
			$data['id_jenis']=$this->input->post('id'); 
			$data['nama_jenis'] = $this->input->post('nama_jenis');   
			$data['keterangan'] = $this->input->post('keterangan');  
			  
			$this->model_jenis->update($data['id_jenis'], $data);
			
			redirect(base_url().'admin/jenis');
		}
		else
		{
			redirect(base_url().'login');
		}
		 
 
		 
	}
	
	function delete($id){ 
	
		if($this->session->userdata('id_user'))
		{ 
			$this->model_jenis->delete($id); 
			redirect(base_url().'admin/jenis');
		}
		else
		{
			redirect(base_url().'login');
		}
	}
	 
	

}
