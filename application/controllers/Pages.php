<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{	
		$this->load->view('includes/header');
		$this->load->view('pages/index');
	}

	public function login()
	{
		$this->load->view('includes/header');
		$this->load->view('pages/login');
		$this->load->view('includes/footer');
	}

	public function timeline()
	{
		$this->load->view('includes/header');
		$this->load->view('pages/timeline');
		$this->load->view('includes/footer');
	}

	public function projects()
	{
		$this->load->view('includes/header');
		$this->load->view('pages/projects');
		$this->load->view('includes/header');
	}
}
