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
	
	public function events()
	{
		$data['main'] = 'user/events_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/events_view');
		$this->load->view('user/footer', $data);
	}
	
	public function media()
	{
		$data['main'] = 'user/events_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/media_view');
		$this->load->view('user/footer', $data);
	}
	
	public function social()
	{
		$data['main'] = 'user/events_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/social_view');
		$this->load->view('user/footer', $data);
	}
	
}
