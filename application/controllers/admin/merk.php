<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class merk extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->model('Model_merk','model_merk');
		$this->load->helper('url');
	}
	
	function index(){
		
		if($this->session->userdata('id_user'))
		{
			$data['data']=$this->model_merk->getAll();
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu');
			$this->load->view('admin/view_merk',$data);
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
			$this->load->view('admin/view_merk_tambah',$data);
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
			$data['nama_merk'] = $this->input->post('nama_merk');   
			$data['keterangan'] = $this->input->post('keterangan');  
			  
			$this->model_merk->insert($data); 
			
			redirect(base_url().'admin/merk');
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
			$data['data']=$this->model_merk->get_by_id($id);
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_merk_edit',$data);
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
			$data['id_merk']=$this->input->post('id'); 
			$data['nama_merk'] = $this->input->post('nama_merk');   
			$data['keterangan'] = $this->input->post('keterangan');  
			  
			$this->model_merk->update($data['id_merk'], $data);
			
			redirect(base_url().'admin/merk');
			
		}
		else
		{
			redirect(base_url().'login');
		} 
 
		 
	}
	
	function delete($id){ 
	
		if($this->session->userdata('id_user'))
		{
			$this->model_merk->delete($id); 
			redirect(base_url().'admin/merk');
			
		}
		else
		{
			redirect(base_url().'login');
		}
	}
	 
	

}
