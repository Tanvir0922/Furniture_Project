<?php
class Myordermodel extends CI_model{
    
    public function getData()
    {
        //print_r($arr);
        $this->load->database();
         $query="select prod_img,Productname,Productprice,Qty from product,orderdeatils,ordermaster where product.Productid=orderdeatils.Productid and ordermaster.Orderid=orderdeatils.Orderid and Userid=".$_SESSION['Userid'];
       $q=$this->db->query($query);
        return $q->result_array();

    }
   
}
?>