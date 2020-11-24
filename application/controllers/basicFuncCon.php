<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class basicFuncCon extends CI_Controller {
  public function index()
  {
      $this->load->view('menu');
  }

  public function skuSearch()
  {
    $cate= $_GET['cate'];
    $this->load->model('basicFuncModel');
    return($this->basicFuncModel->skuSearch_db($cate));
  }

  public function priceSearch()
  {
    $sku = $_GET['sku'];
    $this->load->model('basicFuncModel');
    return($this->basicFuncModel->priceSearch_db($sku));
  }

}
