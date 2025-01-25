
<?php

class Adminmodel extends CI_model{
    
    public function create($fromArray)
    {
        print_r($fromArray);
        $res=$this->db->insert('admin',$fromArray);
          return ($res);

    }
}
?>
