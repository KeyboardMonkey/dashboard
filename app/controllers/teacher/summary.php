<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Summary extends MY_Controller {

	public function mark()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/top-bar');
		$this->load->view('templates/left-bar');
		$this->load->view('pages/summary-mark');
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
		$this->load->view('pages/summaries-all');
		$this->load->view('templates/footer');
	}
}
