<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billcon extends CI_controller
{

    

public function index()
{
   
    $arr=array();
    if(isset($_SESSION['Productid']))
        $arr['Productid']=$_SESSION['Productid'];
     
    if(isset($_SESSION['Qty']))
     $arr['Qty']=$_SESSION['Qty'];
    
    if(isset($_SESSION['Price']))
       $arr['Price']=$_SESSION['Price'];
     
   
   
    
    //print_r($arr2);
    $this->load->model('Billmodel');
   
        
    
    
    if($this->Billmodel->create($arr))
    {
        echo "Add item into Cart";
    
     header('Location:http://localhost/project/index.php/Myordercon');
     
    }
}
}



?>