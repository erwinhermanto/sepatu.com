<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class toko extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->model('Model_toko','model_toko');
		$this->load->helper('url');
	}
	
	function index(){
		
		if($this->session->userdata('id_user'))
		{
			
			$data['data']=$this->model_toko->getAll();
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu');
			$this->load->view('admin/view_toko',$data);
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
			$this->load->view('admin/view_toko_tambah',$data);
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
			
		 
			$data['nama_toko'] = $this->input->post('nama_toko');   
			$data['alamat'] = $this->input->post('alamat');   
			$data['no_telepon'] = $this->input->post('no_telepon');   
			$data['website'] = $this->input->post('website');   
			$data['latitude'] = $this->input->post('latitude');   
			$data['longitude'] = $this->input->post('longitude');   
			$data['keterangan'] = $this->input->post('keterangan');  
			  
			$this->model_toko->insert($data); 
			
			redirect(base_url().'admin/toko');
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
			$data['data']=$this->model_toko->get_by_id($id);
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_toko_edit',$data);
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
			
			$data['id_toko']=$this->input->post('id'); 
			$data['nama_toko'] = $this->input->post('nama_toko');   
			$data['alamat'] = $this->input->post('alamat');   
			$data['no_telepon'] = $this->input->post('no_telepon');   
			$data['website'] = $this->input->post('website');   
			$data['latitude'] = $this->input->post('latitude');   
			$data['longitude'] = $this->input->post('longitude');   
			$data['keterangan'] = $this->input->post('keterangan');  
			  
			$this->model_toko->update($data['id_toko'], $data);
			
			redirect(base_url().'admin/toko');
		}
		else
		{
			redirect(base_url().'login');
		}
		 
 
		 
	}
	
	function delete($id){ 
		
		if($this->session->userdata('id_user'))
		{
			
			$this->model_toko->delete($id); 
			redirect(base_url().'admin/toko');
		}
		else
		{
			redirect(base_url().'login');
		}
	}
	 
	

}
