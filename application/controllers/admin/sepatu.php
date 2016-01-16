<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sepatu extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->model('Model_sepatu','model_sepatu');
		$this->load->helper('url');
	}
	
	function index(){
		
		if($this->session->userdata('id_user'))
		{
			
			$data['data']=$this->model_sepatu->getAll();
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu');
			$this->load->view('admin/view_sepatu',$data);
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
			
			$data['merk']=$this->model_front->get_all_merk();
			$data['jenis']=$this->model_front->get_all_jenis();
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_sepatu_tambah',$data);
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
			$config['upload_path'] =  $_SERVER['DOCUMENT_ROOT'].'/tokosepatu/assets/upload/';
			$config['allowed_types'] = '*';
			$config['max_size']  = '10000'; 
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				// $this->session->set_flashdata('alert', "0,Field harus diisi!");		 
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				//redirect('admin/sepatu/tambah' );
			} 
			else
			{	
	  
				$upload_data = $this->upload->data(); 
				$nama_lama =  $upload_data['file_name'];
				$nama_baru =  'Sepatu-'. date("Y.m.d") . '-' . date("H.i.s") .'-'.  $upload_data['file_ext'] ;
				rename($config['upload_path'] . $nama_lama, $config['upload_path'] . $nama_baru);
					 
				$file = $config['upload_path'].$nama_baru;   
				$path = $file ;
				
				$tz_string = "Asia/Jakarta"; // Use one from list of TZ names http://php.net/manual/en/timezones.php 
				$tz_object = new DateTimeZone($tz_string); 
					
				$datetime = new DateTime(); 
				$datetime->setTimezone($tz_object);  
				
				$data['id_toko'] = $this->input->post('id_toko');  
				$data['id_merk'] = $this->input->post('id_merk');  
				$data['id_jenis'] = $this->input->post('id_jenis');  
				$data['nama_sepatu'] = $this->input->post('nama_sepatu');  
				$data['ukuran'] = $this->input->post('ukuran');  
				$data['harga'] = $this->input->post('harga');  
				$data['warna'] = $this->input->post('warna');   
				$data['foto'] = $nama_baru;
				$data['keterangan'] = $this->input->post('keterangan');  
				  
				$this->model_sepatu->insert($data); 
				
				redirect(base_url().'admin/sepatu');

			}
			
		}
		else
		{
			redirect(base_url().'login');
		}
		
		
		 
	}
	 
	
	function ubah($id){ 
		
		if($this->session->userdata('id_user'))
		{
			$data['merk']=$this->model_front->get_all_merk();
			$data['jenis']=$this->model_front->get_all_jenis();
			$data['data']=$this->model_sepatu->get_by_id($id);
			$this->load->view('admin/layout/view_header');
			$this->load->view('admin/layout/view_menu'); 
			$this->load->view('admin/view_sepatu_edit',$data);
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
		
			$tz_string = "Asia/Jakarta"; // Use one from list of TZ names http://php.net/manual/en/timezones.php 
			$tz_object = new DateTimeZone($tz_string); 
				
			$datetime = new DateTime(); 
			$datetime->setTimezone($tz_object);  
			
			$config['upload_path'] =  $_SERVER['DOCUMENT_ROOT'].'/tokosepatu/assets/upload/';
			$config['allowed_types'] = '*';
			$config['max_size']  = '10000'; 
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload())
			{
				$data['id_sepatu']=$this->input->post('id');
				$data['id_toko'] = $this->input->post('id_toko');  
				$data['id_merk'] = $this->input->post('id_merk');  
				$data['id_jenis'] = $this->input->post('id_jenis');  
				$data['nama_sepatu'] = $this->input->post('nama_sepatu');  
				$data['ukuran'] = $this->input->post('ukuran');  
				$data['harga'] = $this->input->post('harga');  
				$data['warna'] = $this->input->post('warna');    
				$data['keterangan'] = $this->input->post('keterangan');  
				
				$this->model_sepatu->update($data['id_sepatu'], $data);
				
				redirect(base_url().'admin/sepatu');
			} 
			else
			{	
	  
				$upload_data = $this->upload->data(); 
				$nama_lama =  $upload_data['file_name'];
				$nama_baru =  'Sepatu-'. date("Y.m.d") . '-' . date("H.i.s") .'-'.  $upload_data['file_ext'] ;
				rename($config['upload_path'] . $nama_lama, $config['upload_path'] . $nama_baru);
					 
				$file = $config['upload_path'].$nama_baru;   
				$path = $file ;
				 
				$data['id_sepatu']=$this->input->post('id');
				$data['id_toko'] = $this->input->post('id_toko');  
				$data['id_merk'] = $this->input->post('id_merk');  
				$data['id_jenis'] = $this->input->post('id_jenis');  
				$data['nama_sepatu'] = $this->input->post('nama_sepatu');  
				$data['ukuran'] = $this->input->post('ukuran');  
				$data['harga'] = $this->input->post('harga');  
				$data['warna'] = $this->input->post('warna');   
				$data['foto'] = $nama_baru;
				$data['keterangan'] = $this->input->post('keterangan');  
				  
				$this->model_sepatu->update($data['id_sepatu'], $data);
				
				redirect(base_url().'admin/sepatu');

			}
			
		}
		else
		{
			redirect(base_url().'login');
		}
		
		 
	}
	
	function delete($id){ 
		
		if($this->session->userdata('id_user'))
		{
			$this->model_sepatu->delete($id); 
			redirect(base_url().'admin/sepatu');
			
		}
		else
		{
			redirect(base_url().'login');
		}
	}
	 
	

}
