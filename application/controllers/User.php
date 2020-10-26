<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function check_login(){
	    $uname = $this->input->post('username');
	    $pwd = $this->input->post('password');

	    $this->load->model('user_model');

        $this->user_model->get_by_user_and_pwd($uname, $pwd);

    }
}
