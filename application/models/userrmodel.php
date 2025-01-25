<?php

class userrmodel extends CI_model()
{
    function create($formArray)
    {
       $this->db->insert('category',$formArray);         //insert into user(Categoryname,Categorydescription)
    }
    
}
