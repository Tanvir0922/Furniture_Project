
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productfeatureinsertmodel extends CI_model{
    
    public function create($fromArray)
    {
        $res=$this->db->insert('productfeaure',$fromArray);
          return ($res);

    }
    public function getData()
    {
        $this->load->database();
    $q=$this->db->query("select * from product");
    return $q->result_array();
    }

    public function getData_feature()
    {
        $this->load->database();
    $q=$this->db->query("select * from feature");
    return $q->result_array();
    }
}
?>