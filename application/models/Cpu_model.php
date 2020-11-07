<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpu_model extends CI_Model {

    public function cpu_search($brand, $PGPL, $CPL, $CG){
//        return $this->db->get_where(
//            't_user', array('user_name'=>$uname, 'password'=>$pwd)
//        )->row();
        if($CPL == "R") {
          $query = $this->db->query(
            "SELECT *
             FROM CPU NATURAL JOIN Hardware
             where brandName = '$brand' AND sku LIKE '%$PGPL%'AND sku NOT Like '%T%' AND sku LIKE '%$CG%'
            "
          );
        } else {
          $query = $this->db->query(
            "SELECT *
             FROM CPU NATURAL JOIN Hardware
             where brandName = '$brand' AND sku LIKE '%$PGPL%'AND sku Like '%$CPL%' AND sku LIKE '%$CG%'
            "
          );
        }

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
          if($key == 'brandName' || $key == 'price') {
            $this->db->query(
            "UPDATE Hardware
             SET $key = '$value'
             where Hardware.sku = '$sku'
            ");
          } else {
            $value = "'".$value."'";
            $this->db->query(
            "UPDATE CPU
             SET $key = $value
             where CPU.sku = '$sku'
            ");
          }

      }


      $query = $this->db->query(
        "SELECT *
         FROM CPU NATURAL JOIN Hardware
         where sku = '$sku'
        ");
       echo json_encode($query->result());
    }

}
