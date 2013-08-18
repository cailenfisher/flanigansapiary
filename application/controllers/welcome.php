<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($view)
	{
		$this->load->view('header');
		$this->load->view($view);
		$this->load->view('footer');
	}
}
