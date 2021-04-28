<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/about_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/about_view');
		$this->load->view('user/footer', $data);
	}
	
	public function team()
	{
		$data['main'] = 'user/team_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/team_view');
		$this->load->view('user/footer', $data);
	}
	
	public function ourprogram()
	{
		$data['main'] = 'user/team_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/ourprogram_view');
		$this->load->view('user/footer', $data);
	}
	
}
