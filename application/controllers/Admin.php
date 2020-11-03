<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function index()
    {
        $this->load->view('menu');
    }

    public function hardwareInsert(){
        $this->load->view('chooseInsert');
    }
}