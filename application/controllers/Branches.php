<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller {

	public function nilak()
	{
		$data['main'] = 'user/nilak_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/nilak_view');
		$this->load->view('user/footer', $data);
	}
	
}
