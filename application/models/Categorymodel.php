<?php

class Categorymodel extends CI_model{
    
   


    public function getData()
{
   $this->load->database();
    $q=$this->db->get("category");
    return $q->result_array();

}

}



?>