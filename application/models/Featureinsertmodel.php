<?php

class Featureinsertmodel extends CI_model{
    
    public function create($fromArray)
    {
        print_r($fromArray);
        $res=$this->db->insert('feature',$fromArray);
          return ($res);

    }
}
?>