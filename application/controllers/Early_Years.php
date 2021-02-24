<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Early_Years extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/early_years_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/early_years_view');
		$this->load->view('user/footer', $data);
	}
	
	public function cambridge()
	{
		$this->load->view('user/header');
		$this->load->view('user/cambridge_view');
		$this->load->view('user/footer');
	}
	
	public function our_approach()
	{
		$this->load->view('user/header');
		$this->load->view('user/our_approach_view');
		$this->load->view('user/footer');
	}
	
	public function curriculum()
	{
		$this->load->view('user/header');
		$this->load->view('user/curriculum_view');
		$this->load->view('user/footer');
	}
	
	public function resources()
	{
		$this->load->view('user/header');
		$this->load->view('user/resources_view');
		$this->load->view('user/footer');
	}
	
	public function measuring()
	{
		$this->load->view('user/header');
		$this->load->view('user/measuring_view');
		$this->load->view('user/footer');
	}
	
}
