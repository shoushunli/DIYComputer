<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$this->load->view('search_window');
	}

	public function test()
	{
		$this->load->view('cpu_search');
	}
}
