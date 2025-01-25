<?php

class Categoryinsertmodel extends CI_model{
    
    public function create($fromArray)
    {
        // print_r($fromArray);
        // if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        //     $name = $_FILES['image']['name'];
        //     $type = $_FILES['image']['type'];
        //     $data = file_get_contents($_FILES['image']['tmp_name']);
        print_r($fromArray);
        $res=$this->db->insert('category',$fromArray);
          return ($res);

    }
}
?>