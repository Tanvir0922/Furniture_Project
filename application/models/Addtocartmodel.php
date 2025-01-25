<?php
class Addtocartmodel extends CI_model{
    
    public function create($arr)
    {
        print_r($arr);
        $arr1=array();
        $userid=$_SESSION['Userid'];
        $cartdate=date("Y-m-d");
        //echo "date=".date("Y-m-d");
        $this->load->database();
        $query="insert into cartmaster (Userid,Cartdate) values($userid,'$cartdate') ";
        $res=$this->db->query($query);
        $query="select Cartid from cartmaster where Userid=$userid and Cartdate='$cartdate' order by Cartid";
        $res1=$this->db->query($query);
        $row=$res1->last_row();
        print_r($row);
        $cartid=$row->Cartid;
        $arr1['Cartid']=$cartid;
        $arr1['Productid']=$arr['Productid'];
        $arr1['Qty']=$arr['Qty'];
        $tprice=intval(trim($arr['Price']))*intval(trim($arr['Qty']));
        $q=$this->db->insert('cartdeatil',$arr1);

        $query="update cartmaster set Tprice=$tprice where Cartid=$cartid";
        $res2=$this->db->query($query);
       $res=$res && $q && $res2;
        return ($res);

    }
   
}
?>