<?php
class Under2_model extends CI_model{
    
    public function getData($arr)
    {
        //print_r($arr);
        $this->load->database();
        $this->db->where("Productid",$arr['Productid']);
        $q=$this->db->get("product");
        return $q->result_array();

    }
    public function getData_feature($arr)
    {
        //print_r($arr);
        $this->load->database();
        $query="select Featurename,Value from feature f,product p,productfeaure pf where f.Featureid=pf.Featureid and p.Productid=pf.Productid and p.Productid=".$arr['Productid'];
        $q=$this->db->query($query);
        return $q->result_array();

    }
}
?>