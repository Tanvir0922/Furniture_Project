<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addresinsertcon extends CI_Controller
{
    public function Addresinsertsview()
    {
      //for foregin key
     // example-$product_id=1;

    $arr=$this->input->post();
    print_r($arr);

    

    $this->load->model('Addresinsertmodel');
    
    if($this->Addresinsertmodel->create($arr))
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('Addresinsertsview');
    }
    public function index()
	{
		$this->load->view('Addresinsertsview');
		
	}
}
?>