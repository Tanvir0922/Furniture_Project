
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkoutcon extends CI_controller
{

    public function Checkout(){

         $arr2=$this->input->post();
        $this->load->model('Checkoutmodel');
        if($this->Checkoutmodel->create($arr2))
        {
            $this->load->model('Checkoutmodel');
        $data['userinfo']=$this->Checkoutmodel->getData();
        $this->load->view('Checkoutview',$data);
        }
    }

public function index()

{
    if(isset($_SESSION['flag']))
    {
        $flag=$_SESSION['flag'];
        unset($_SESSION['flag']);
    }
    else
    $flag=0;
    $arr2=$this->input->post();
    $_SESSION['page']=3;
    if($flag==0)
    //$arr2=$this->input->post();
   // $_SESSION['page']=3;
   {
    $_SESSION['Productid']=$arr2['Productid'];
   
    $_SESSION['Qty']=$arr2['Qty'];
    
    $_SESSION['Price']=$arr2['Price'];
}
    $_SESSION['page']=3;
    if(isset($_SESSION['Userid']))
    {
        $this->load->model('Checkoutmodel');
        $data['userinfo']=$this->Checkoutmodel->getData();
        $this->load->view('Checkoutview',$data);
    
     
    }

else
{
   
 $this->load->view('login');
}
}
}
?>