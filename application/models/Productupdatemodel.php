<?php

class Productupdatemodel extends CI_model{
    
   
public function getData($Productid)
{
    $this->load->database();
    $q=$this->db->query("select * from product where Productid=".$Productid);
    return $q->row();
}

    public function updateData($arr)
{
   $this->load->database();
   $fromarray["Productname"]=$arr["Productname"];
    $fromarray["Productdesc"]=$arr["Productdesc"];
    $fromarray["Productqty"]=$arr["Productqty"];
    $fromarray["Productprice"]=$arr["Productprice"];
   $this->db->where("Productid",$arr['Productid']);

    $q=$this->db->update("product",$fromarray);
    return $q;

}
public function deleteData($arr)
{
   $this->load->database();
   
   $this->db->where("Productid",$arr['Productid']);

    $q=$this->db->delete("product");
    return $q;

}

}



?>