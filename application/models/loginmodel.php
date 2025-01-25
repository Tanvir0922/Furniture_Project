<?php
class loginmodel extends CI_model{
    
    public function getData($arr)
    {
        print_r($arr);
        $this->load->database();
        $this->db->where("Username",$arr['Username']);
        $this->db->where("Password",$arr['Password']);
        $q=$this->db->get("user");
        return $q->result_array();

    }
   
}
?>