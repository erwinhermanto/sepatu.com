<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('Model_login');
		$this->load->helper('url');
	}
	
	
	public function index()
	{

		$data['message'] = ''; 
		$this->load->view('admin/view_login',$data);// isi 
		
	}
	
	public function cek_login()
	{
		 

		$data['username'] = $this->input->post('username');

		$data['password'] = $this->input->post('password');
		 
		$row = $this->Model_login->cek_login($data['username'], ($data['password']));
		
		if ($row->num_rows() > 0){ 										 

		 
			
			$this->session->set_userdata('id_user', $row->row()->id_user);
			$this->session->set_userdata('id_toko', $row->row()->id_toko);
			$this->session->set_userdata('username', $row->row()->username); 
			$this->session->set_userdata('password', $row->row()->password); 
			$this->session->set_userdata('level', $row->row()->level);   
			$this->session->set_userdata('toko', $row->row()->nama_toko);
			  
			redirect(base_url().'admin/home');
  

		}else{														 

			$data['message'] = 'Username / password salah';
 
			$this->load->view('admin/view_login',$data);// isi 
		

		}
	}
	
	function logout() 
	{

		$this->session->sess_destroy(); 
		redirect(base_url().'login');

	}
	
}

