<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nurture extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/nurture_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/nurture_view');
		$this->load->view('user/footer', $data);
	}
	
}