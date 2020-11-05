<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

    public function menu()
    {
        $this->load->view('menu');
    }

    public function test()
    {
        $this->load->view('test');
    }

    public function cpuInsert()
    {
        $this->load->view('cpuInsert');
    }
}