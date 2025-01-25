<?php
class Homemodel2 extends CI_model{
    
    public function getData()
    {
        //print_r($fromArray);
        $this->load->database();
        $q=$this->db->get("category");
        return $q->result_array();

    }
}
?>