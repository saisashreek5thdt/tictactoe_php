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
	
}
