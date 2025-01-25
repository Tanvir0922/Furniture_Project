<?php

class Categoryupdatemodel extends CI_model{
    
   
public function getData($categoryid)
{
    $this->load->database();
    $q=$this->db->query("select * from category where Categoryid=".$categoryid);
    return $q->row();
}

    public function updateData($arr)
{
   $this->load->database();
   $fromarray["Categoryname"]=$arr["Categoryname"];
    $fromarray["Categorydescription"]=$arr["Categorydescription"];
   $this->db->where("Categoryid",$arr['Categoryid']);

    $q=$this->db->update("category",$fromarray);
    return $q;

}
public function deleteData($arr)
{
   $this->load->database();
   
   $this->db->where("Categoryid",$arr['Categoryid']);

    $q=$this->db->delete("category");
    return $q;

}

}



?>