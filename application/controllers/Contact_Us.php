<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/contact_us_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/contact_us_view');
		$this->load->view('user/footer', $data);
	}
	
}
