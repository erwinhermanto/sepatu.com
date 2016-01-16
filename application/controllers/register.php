<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	function index(){
		$this->load->view('admin/view_register');
	}

	function akun_baru(){
		$this->load->model('model_register');
		$data['nama_toko'] = $this->input->post('nama_toko');   
		$data['alamat'] = $this->input->post('alamat');   
		$data['no_telepon'] = $this->input->post('no_telepon');   
		$data['website'] = $this->input->post('website');
		$data['latitude'] = $this->input->post('latitude');
		$data['longitude'] = $this->input->post('longitude');
		$data['keterangan'] = $this->input->post('keterangan');
		$this->model_register->insert($data);
		redirect(base_url().'login');
	}
}