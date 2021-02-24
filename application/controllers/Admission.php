<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/admission_form_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/admission_form_view');
		$this->load->view('user/footer', $data);
	}
	
}
