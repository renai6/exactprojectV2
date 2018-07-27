<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
			$this->load->view('pages/index');
	}

	public function login()
	{
		$this->load->view('pages/login');
	}

	public function timeline()
	{
		$this->load->view('pages/timeline');
	}

	public function projects()
	{
		$this->load->view('pages/projects');
	}
}
