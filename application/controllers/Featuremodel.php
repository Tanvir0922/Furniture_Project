<?php

class Featuremodel extends CI_model{
    
   


    public function getData()
{
   $this->load->database();
    $q=$this->db->get("feature");
    return $q->result_array();

}

}



?>