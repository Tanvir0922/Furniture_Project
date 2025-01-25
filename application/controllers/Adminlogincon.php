<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogincon extends CI_Controller
{
    public function Adminlogin()
    {
      //for foregin key
     // example-$product_id=1;

    $arr=$this->input->post();
    //print_r($arr);

    //arr["product_id"]=$product_id;

    $this->load->model('Adminlogmodel');
    $formArray=array();


    $formArray['Username']=$this->input->post('Username');
    $formArray['Password']=$this->input->post('Password');
   

    //print_r($formArray);
    if($this->Adminmodel->getData($arr))
    {
      $this->load->view('Adminview');
    }
    else
     echo "Invalid";
    
    $this->load->view('Adminlogin');
    }
    public function index()
	{
		$this->load->view('Adminlogin');
		
	}
}
?>

