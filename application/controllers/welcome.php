<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($view)
	{
		$this->load->view('header');
		$this->load->view($view);
		$this->load->view('footer');
	}
	
	public function store($view)
	{
		$this->load->view('store-header');
		$this->load->view('store-'.$view);
		$this->load->view('store-footer');
	}
}
