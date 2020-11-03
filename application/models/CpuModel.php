<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CpuModel extends CI_Model {
    public function insertCpu($brand, $sku, $price, $cores, $threads, $tdp, $regularFreq, $boostFreq, $coreGPU, $socket){
        $this->db->insert('Hardware', array(
            'brandName'=>$brand,
            'sku'=>$sku,
            'price'=>$price,
        ));
        $flag1 = $this->db->affected_rows();
        $this->db->insert('CPU', array(
            'sku'=>$sku,
            'core'=>$cores,
            'thread'=>$threads,
            'tdp'=>$tdp,
            'regularFreq'=>$regularFreq,
            'boostFreq'=>$boostFreq,
            'coreGPU'=>$coreGPU,
            'socket'=>$socket
        ));
        $flag2 = $this->db->affected_rows();
        return $flag1+$flag2;
    }
}
