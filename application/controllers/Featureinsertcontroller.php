<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Featureinsertcontroller extends CI_Controller
{
    public function Featureinsertview()
    {
      //for foregin key
     // example-$product_id=1;

    $arr=$this->input->post();
    print_r($arr);

    

    $this->load->model('Featureinsertmodel');
    
    if($this->Featureinsertmodel->create($arr))
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('Featureinsertview');
    }
    public function index()
	{
		$this->load->view('Featureinsertview');
		
	}
}
?>