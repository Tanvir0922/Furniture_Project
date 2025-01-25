<?php

class Productfkmodel extends CI_model{
    
    public function create($fromArray)
    {
        print_r($fromArray);
        $res=$this->db->insert('product',$fromArray);
          return ($res);

    }
}
?>