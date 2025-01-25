<?php

class Checkoutmodel extends CI_model{
    
   public function create($arr)
   {
    $this->load->database();
    $userid=$_SESSION['Userid'];
    $q=$this->db->query("select * from Userinfo  where Userid=$userid");
    $fromarray=array();
    if($q->num_rows()!=0)
    {
       $fromarray['Name']=$arr['Name'];
       $fromarray['Contact']=$arr['Contact'];
       $fromarray['Email']=$arr['Email'];
       $fromarray['Pincode']=$arr['Pincode'];
       $fromarray['Address']=$arr['Address'];
       $this->db->where("Userid",$arr['Userid']);
    
        $res=$this->db->update("userinfo",$fromarray);
    }
    else
    {
        $fromarray['Userid']=$arr['Userid'];
        $fromarray['Name']=$arr['Name'];
       $fromarray['Contact']=$arr['Contact'];
       $fromarray['Email']=$arr['Email'];
       $fromarray['Pincode']=$arr['Pincode'];
       $fromarray['Address']=$arr['Address'];
        $res=$this->db->insert('userinfo',$fromarray);
    }
   
    return ($res);
   }
public function getData()
{
    $userid=$_SESSION['Userid'];
    $this->load->database();
    $q=$this->db->query("select * from Userinfo  where Userid=$userid");
    if($q->num_rows()!=0)
      return $q->result_array();
    else
      return null;
}
}
?>