<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComplexQuery extends CI_Controller {

    public function index(){
        $this->load->view('complexQuery');
    }

    public function query()
    {
        $group = $this->input->get('group');
        $sql = "SELECT ".$group.", MAX(thread) as max_thread FROM CPU NATURAL JOIN Hardware GROUP BY ".$group;
        $query = $this->db->query($sql);
        echo json_encode($query->result());
    }

    public function query2(){
        $sql = "SELECT * FROM CPU NATURAL JOIN Hardware WHERE core = 8 UNION ALL  SELECT * FROM CPU NATURAL JOIN Hardware WHERE thread = 4";
        $query = $this->db->query($sql);
        echo json_encode($query->result());
    }
}
