<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function get_by_user_and_pwd($uname, $pwd){
//        return $this->db->get_where(
//            't_user', array('user_name'=>$uname, 'password'=>$pwd)
//        )->row();


        $sql = "SELECT password FROM t_user WHERE user_name=?";
        $query = $this->db->query($sql, array($uname));

        foreach ($query->result_array() as $row)
        {
            echo $row['password'];
        }
    }
}
