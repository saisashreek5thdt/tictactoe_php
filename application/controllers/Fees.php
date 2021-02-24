<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fees extends CI_Controller {

	public function index()
	{
		$data['main'] = 'user/fee_structure_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/fee_structure_view');
		$this->load->view('user/footer', $data);
	}
	
	public function playgroup()
	{
		$data['main'] = 'user/fee_structure_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/playgroup_view');
		$this->load->view('user/footer', $data);
	}
	
	public function nursery()
	{
		$data['main'] = 'user/fee_structure_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/nursery_view');
		$this->load->view('user/footer', $data);
	}
	
	public function lkg()
	{
		$data['main'] = 'user/fee_structure_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/lkg_view');
		$this->load->view('user/footer', $data);
	}
	
	public function ukg()
	{
		$data['main'] = 'user/fee_structure_view';
		$this->load->view('user/header', $data);
		$this->load->view('user/ukg_view');
		$this->load->view('user/footer', $data);
	}
	
}
