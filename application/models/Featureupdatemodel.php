<?php

class Featureupdatemodel extends CI_model{
    
   
public function getData($Featureid )
{
    $this->load->database();
    $q=$this->db->query("select * from feature where Featureid =".$Featureid );
    return $q->row();
}

    public function updateData($arr)
{
   $this->load->database();
   $fromarray["Featurename"]=$arr["Featurename"];
    // $fromarray["Categorydescription"]=$arr["Categorydescription"];
   $this->db->where("Featureid",$arr['Featureid']);

    $q=$this->db->update("feature",$fromarray);
    return $q;

}
public function deleteData($arr)
{
   $this->load->database();
   
   $this->db->where("Featureid",$arr['Featureid']);

    $q=$this->db->delete("feature");
    return $q;

}

}



?>