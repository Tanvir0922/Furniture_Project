<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class orderdetails extends CI_Controller
{
    public function orderdetailsview()
    {
     $Order_id=1;
     $Product_id=1;
     // example-$product_id=1;

    $arr=$this->input->post();
    print_r($arr);

    $arr["Order_id"]=$Order_id;

    



    $this->load->model('orderdetailsmodel');
    $formArray=array();


    $formArray['qty']=$this->input->post('qty');
    //$formArray['category_description']=$this->input->post('category_description');
    

    print_r($formArray);
    if($this->orderdetailsmodel->create($arr))
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('orderdetailsview');
    }
    public function index()
	{
		$this->load->view('orderdetailsview');
		
	}
}
?