<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ordercon extends CI_controller
{

    

public function index()
{
    $arr=$this->input->post();
    if(isset($_SESSION['Productid']))
     $arr['Productid']=$_SESSION['Productid'];
     else
    $_SESSION['Productid']=$arr['Productid'];
    if(isset($_SESSION['Qty']))
     $arr['Qty']=$_SESSION['Qty'];
     else
    $_SESSION['Qty']=$arr['Qty'];
    if(isset($_SESSION['Userid']))
    {
    
    print_r($arr);
    $this->load->model('Ordermodel');
    if($this->Ordermodel->create($arr))
    {
        echo "succsefully orderd";
    
     header('Location:http://localhost/project/index.php/Myordercon');
    }
}
else
 $this->load->view('login');
}
}
?>