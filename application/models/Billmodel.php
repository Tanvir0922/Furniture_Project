<?php
class Billmodel extends CI_model{
    
    public function create($arr)
    {
        echo "billmodel";
        print_r($arr);
        $arr1=array();
        $userid=$_SESSION['Userid'];
        $orderbookdate=date("Y-m-d");
        //echo "date=".date("Y-m-d");
        $this->load->database();
        $query="insert into ordermaster (Userid,Orderbookdate) values($userid,'$orderbookdate') ";
        $res=$this->db->query($query);
        $query="select Orderid from ordermaster where Userid=$userid and Orderbookdate='$orderbookdate' order by Orderid";
        $res1=$this->db->query($query);
        $row=$res1->last_row();
        print_r($row);
        $Orderid=$row->Orderid;
        $arr1['Orderid']=$Orderid;
        $arr1['Productid']=$arr['Productid'];
        $arr1['Qty']=$arr['Qty'];
        $tprice=$arr['Price']*$arr['Qty'];
        $q=$this->db->insert('orderdeatils',$arr1);

        $query="update ordermaster set Tprice=$tprice where Orderid=$Orderid";
        $res2=$this->db->query($query);
       $res=$res && $q && $res2;
        return ($res);

    }
   
}
?>