<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {

    public function doCpuInsert(){
        $brand = $this->input->post('brand');
        $sku = $this->input->post('sku');
        $price = $this->input->post('price');
        $cores = $this->input->post('cores');
        $threads = $this->input->post('threads');
        $tdp = $this->input->post('tdp');
        $regularFreq = $this->input->post('regularFreq');
        $boostFreq = $this->input->post('boostFreq');
        $socket = $this->input->post('socket');
        $coreGPU = $this->input->post('coreGPU');
        $this->load->model('cpuModel');
        $rows = $this->cpuModel->insertCpu($brand, $sku, $price, $cores, $threads, $tdp, $regularFreq, $boostFreq, $coreGPU, $socket);

        $this->load->view('cpuInsert', array('rows'=>$rows));
    }
}