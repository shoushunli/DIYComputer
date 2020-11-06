<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('menu');
    }

    public function cpuSearch()
    {
        $this->load->view('cpu_search');
    }

    public function cpuInsert()
    {
        $this->load->view('cpuInsert');
    }
}
