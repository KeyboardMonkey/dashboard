<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class courses extends MY_Controller {

	public function view()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/top-bar');
		$this->load->view('templates/left-bar');
		$this->load->view('pages/courses');

		$this->load->view('templates/footer');
	}

	public function add()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/top-bar');
		$this->load->view('templates/left-bar');
		$this->load->view('pages/add-course');

		$this->load->view('templates/footer');
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/top-bar');
		$this->load->view('templates/left-bar');
		$this->load->view('pages/courses');

		$this->load->view('templates/footer');
	}
}
