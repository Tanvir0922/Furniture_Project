<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addtocartcon extends CI_controller
{

    

public function index()
{
    print_r($_SESSION);
    if(isset($_SESSION['flag']))
     {
        $flag=$_SESSION['flag'];
        unset($_SESSION['flag']);
     }
     else
     $flag=0;
    $arr2=$this->input->post();
    $_SESSION['page']=2;
    
    
    
     
   echo "falg=$flag";
    if(isset($_SESSION['Userid']))
    {
    
    //print_r($arr2);
    $this->load->model('Addtocartmodel');
    if($flag==1)
    {
        if(isset($_SESSION['Productid']))
        $arr['Productid']=$_SESSION['Productid'];
     
    if(isset($_SESSION['Qty']))
     $arr['Qty']=$_SESSION['Qty'];
    
    if(isset($_SESSION['Price']))
     $arr['Price']=$_SESSION['Price'];
     echo "arr";
     print_r($arr);
    if($this->Addtocartmodel->create($arr))
    {
        echo "Add item into Cart";
    
     header('Location:http://localhost/project/index.php/Cartcon');
     
    }
}
else
{
    echo "arr2";
     print_r($arr2);
    if($this->Addtocartmodel->create($arr2))
    {
        echo "Add item into Cart";
    
     header('Location:http://localhost/project/index.php/Cartcon');
     
    }
}
}
else
{
    
    print_r($arr2);
   $_SESSION['Productid']=$arr2['Productid'];
   
   $_SESSION['Qty']=$arr2['Qty'];
   
   $_SESSION['Price']=$arr2['Price'];
  // $_SESSION['flag']=1;
 $this->load->view('login');
}
}
}
?>