<?php

class Usermodel1 extends CI_model{
    
    public function create($fromArray,$registerroll)
    {
        $res=$this->db->insert('user',$fromArray);
       $query=$this->db->query('select UserId from user order by UserId desc limit 1');
       $result=$query->result_array();
      // return $result;

       $query=$this->db->query("select RollId from roll where RollName='$registerroll'");
       $result1=$query->result_array();
       //return $result1;
       $rollid=$result1[0]['RollId'];

        $res1=$this->db->insert('userroll',['RollId'=>$rollid,'UserId'=>$result[0]['UserId']]);

        if($res && $res1)
          return (true);
        else
         return (false);

    }
}
?>