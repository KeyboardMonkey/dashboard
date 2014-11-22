<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/top-bar');
		$this->load->view('templates/left-bar');
		$this->load->view('pages/index');

		$this->load->view('templates/footer');
	}
}
