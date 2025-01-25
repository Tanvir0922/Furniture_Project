<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdemocontroller extends CI_Controller
{
    public function Userdemoview()
    {
      //for foregin key
     // example-$product_id=1;

    $arr=$this->input->post();
    //print_r($arr);

    //arr["product_id"]=$product_id;

    $this->load->model('Userdemomodel');
    //$formArray=array();


    $formArray['Username']=$this->input->post('Username');
    $formArray['Email']=$this->input->post('Email');
    $formArray['Contact']=$this->input->post('Contact');
    $formArray['Password']=$this->input->post('Password');

    //print_r($formArray);
    if($this->Userdemomodel->create($arr))
    {
  ?>
      <script type=text/javascript>alert("Register succsessfully");</script>
      echo "Sucess";
      <?php
      
    }
    else
     echo "Error";
    
    $this->load->view('Userdemoview');
    }
    public function index()
	{
		$this->load->view('Userdemoview');
		
	}
}
?>

