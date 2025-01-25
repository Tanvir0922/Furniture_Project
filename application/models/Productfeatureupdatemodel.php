<?php

class Productfeatureupdatemodel extends CI_model{
      
public function getData($Productid)
{
    $this->load->database();
    $q=$this->db->query("select * from productfeaure where Productid=".$Productid);

    $q=$this->db->query("select * from productfeaure where Featureid=".$Featureid);
    return $q->row();
}

    public function updateData($arr)
{
   $this->load->database();
  // $fromarray["Productname"]=$arr["Productname"];
    //$fromarray["Productdesc"]=$arr["Productdesc"];
   // $fromarray["Productqty"]=$arr["Productqty"];
    $fromarray["Value"]=$arr["Value"];
   $this->db->where("Productid",$arr['Productid']);

   // $q=$this->db->update("productfeaure",$fromarray);
    //return $q;


    $this->db->where("Featureid",$arr['Featureid']);

    $q=$this->db->update("productfeaure",$fromarray);
    return $q;


}
public function deleteData($arr)
{
   $this->load->database();
   
   $this->db->where("Productid",$arr['Productid']);

   $this->db->where("Featureid",$arr['Featureid']);


    $q=$this->db->delete("productfeaure");
    return $q;

}
}

?>