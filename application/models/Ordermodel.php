<?php
class Ordermodel extends CI_model{
    
    public function create($arr)
    {
        //print_r($arr);
        $arr1=array();
        $userid=$_SESSION['Userid'];
        $Orderbookdate=date("Y-m-d");
        //echo "date=".date("Y-m-d");
        $this->load->database();
        $query="insert into ordermaster (Userid,Orderbookdate) values($userid,'$orderbookdate') ";
        $res=$this->db->query($query);
        $query="select Orderid from ordermaster where Userid=$userid and Orderbookdate='$orderbookdate' order by Orderid";
        $res1=$this->db->query($query);
        $row=$res1->last_row();
        print_r($row);
        $orderid=$row->Orderid;
        $arr1['Orderid']=$orderid;
        $arr1['Productid']=$arr['Productid'];
        $arr1['Qty']=$arr['Qty'];
        $tprice=$arr['price']*$arr['Qty'];
        $q=$this->db->insert('orderdeatils',$arr1);

        $query="update ordermaster set Tprice=$tprice where Orderid=$orderid";
        $res2=$this->db->query($query);
       $res=$res && $q && $res2;
        return ($res);

    }
   
}
?>