<?php
class Cartmodel extends CI_model{
    public function getDescription($productid)
    {
        
        $this->load->database();
         $query="select Featurename,value from product p,feature f,productfeaure pf where p.productid=pf.productid and f.featureid=pf.featureid and p.productid=$productid";
       $q=$this->db->query($query);
        return $q;

    }
    public function getData()
    {
        
        $this->load->database();
         $query="select product.Productid,prod_img,Productname,Productprice,Qty from product,cartdeatil,cartmaster where product.Productid=cartdeatil.Productid and cartmaster.Cartid=cartdeatil.Cartid and Userid=".$_SESSION['Userid'];
       $q=$this->db->query($query);
       $q2=array();
       $i=0;
       foreach ($q->result_array() as $r) {
       
    
        $q1=$this->getDescription($r['Productid']);
      
        $r['Description']=$q1->result_array();
        $q2[$i++]=$r;
        
       }
       
        return $q2;
    }
    
   
}
?>