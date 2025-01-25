<?php

class Productmodel extends CI_model{
    
   


    public function getData()
{
   $this->load->database();
    $q=$this->db->get("product");
    return $q->result_array();

}

}



?>