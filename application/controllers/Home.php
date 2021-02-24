<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/home_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/home_view');
		$this->load->view('user/footer', $data);
	}
	
	public function early_years()
	{
		$data['main'] = 'user/early_years_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/early_years_view');
		$this->load->view('user/footer', $data);
	}
	
	public function admission_form()
	{
		$data['main'] = 'user/admission_form_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/admission_form_view');
		$this->load->view('user/footer', $data);
	}
	
	public function contact_us()
	{
		$data['main'] = 'user/contact_us_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/contact_us_view');
		$this->load->view('user/footer', $data);
	}
	
}
