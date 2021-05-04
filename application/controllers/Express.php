<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Express extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/form_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/form_view');
		$this->load->view('user/footer_2', $data);
	}
	
	public function testimonials()
	{
		$data['main'] = 'user/testimonials_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/testimonials_view');
		$this->load->view('user/footer_2', $data);
	}
	
	public function testinfo()
	{
		$data['main'] = 'user/testinfo_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/testinfo_view');
		$this->load->view('user/footer_2', $data);
	}
	
}
