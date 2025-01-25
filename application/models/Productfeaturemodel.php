<?php

class Productfeaturemodel extends CI_model{

    public function getData()
{
   $this->load->database();
    $q=$this->db->get("productfeaure");
    return $q->result_array();

}

}

?>