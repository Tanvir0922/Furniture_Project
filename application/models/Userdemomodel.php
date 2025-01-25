
<?php

class Userdemomodel extends CI_model{
    
    public function create($fromArray)
    {
        print_r($fromArray);
        $res=$this->db->insert('user',$fromArray);
          return ($res);

    }
}
?>
