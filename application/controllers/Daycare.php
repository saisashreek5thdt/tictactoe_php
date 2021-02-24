<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daycare extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/daycare_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/daycare_view');
		$this->load->view('user/footer', $data);
	}
	
}
