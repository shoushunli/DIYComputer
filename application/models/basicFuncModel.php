<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class basicFuncModel extends CI_Model {
  public function skuSearch_db($cate){
    $query = $this->db->query(
      "SELECT DISTINCT sku
       FROM $cate
      "
    );

      echo json_encode($query->result());
  }

  public function priceSearch_db($sku){
    $query = $this->db->query(
      "SELECT price
       FROM Hardware
       where sku = '$sku'
      "
    );
    $row = $query->row();
    echo $row->price;
  }


}
