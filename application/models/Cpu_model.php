<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpu_model extends CI_Model {

    public function cpu_search($brand, $PGPL, $CPL, $CG){
//        return $this->db->get_where(
//            't_user', array('user_name'=>$uname, 'password'=>$pwd)
//        )->row();


        $query = $this->db->query(
          "SELECT *
           FROM CPU NATURAL JOIN Hardware
           where brandName = '$brand'
          "
        );

        echo json_encode($query->result());

    }


    public function cpu_delete_db($sku){
        $query = $this->db->query(
          "DELETE FROM Hardware
           where sku = '$sku'
          ");
         echo $sku. " ". "successfuly deleted";
    }

    public function cpu_update_db($sku, $att){
      foreach ($att as $key => $value) {
          $this->db->query(
          "UPDATE CPU,Hardware
           SET $key = $value
           where Hardware.sku = '$sku'
          ");
      }

      $query = $this->db->query(
        "SELECT *
         FROM CPU NATURAL JOIN Hardware
         where sku = '$sku'
        ");
       echo json_encode($query->result());
    }

}
