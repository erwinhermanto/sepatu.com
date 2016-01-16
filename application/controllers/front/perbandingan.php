<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perbandingan extends CI_Controller {

	
	function __construct(){
		parent::__construct();	
		$this->load->model('Model_front','model_front');
		$this->load->helper('url');
		$this->load->helper('konversi');
	}
	
	public function detail()
	{
		
		$perbandingan = $this->uri->segment(4);
		
		// echo urldecode($perbandingan);
		
		$data['jenis'] = $this->model_front->get_all_jenis();
		$data['merk'] = $this->model_front->get_all_merk();
		$data['toko'] = $this->model_front->get_all_toko();
		$data['detail'] = $this->model_front->get_detail_sepatu(urldecode($perbandingan));
		$data['perbandingan_all'] = $this->model_front->get_perbandingan_sepatu_all(urldecode($perbandingan));
		$data['perbandingan'] = $this->model_front->get_perbandingan_sepatu(urldecode($perbandingan));
		
		$data['cari'] = '';
		$this->load->view('front/layout/view_header',$data);
		$this->load->view('front/layout/view_menu',$data);
		$this->load->view('front/view_perbandingan',$data);
		$this->load->view('front/layout/view_footer');
	}
	 
	

}
