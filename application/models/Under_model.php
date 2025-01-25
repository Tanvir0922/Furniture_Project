<?php
class Under_model extends CI_model{
    
    public function getData($arr)
    {
        //print_r($fromArray);
        $this->load->database();
        $this->db->where("Categoryid",$arr['Categoryid']);
        $q=$this->db->get("product");
        return $q->result_array();

    }
}
?>