<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productfkcontroller extends CI_Controller //controller nav takneee
{
    public function Productfkview()//view che nav takneee
    {

      $Category_id=1;//jo table la forgin key aahe te dene..
    $arr=$this->input->post();
    print_r($arr);
    $arr["Categoryid"]=$Categoryid;

    $this->load->model('Productfkmodel');//model che nav takneee
    $formArray=array();


    $formArray['Productname']=$this->input->post('Productname');
    $formArray['Productdesc']=$this->input->post('Productdesc');
    $formArray['Productqty']=$this->input->post('Productqty');
    $formArray['Productprice']=$this->input->post('Productprice');
    //$formArray['Product_qty']=$this->input->post('Product_qty');
    

    print_r($formArray);
    if($this->Productmodel->create($arr))
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('Productfkview');
    }
    public function index()
	{
		$this->load->view('Productfkview');
		
	}
}
?>