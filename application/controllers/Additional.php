<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Additional extends CI_Controller {

	public function gallery()
	{
		$data['main'] = 'user/gallery_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/gallery_view');
		$this->load->view('user/footer', $data);
	}
	
}
