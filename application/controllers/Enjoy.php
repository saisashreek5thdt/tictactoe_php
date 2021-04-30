<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enjoy extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/gallery_img_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/gallery_img_view');
		$this->load->view('user/footer', $data);
	}
	
}
