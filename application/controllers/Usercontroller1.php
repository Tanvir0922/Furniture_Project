<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usercontroller extends CI_Controller
{
    public function Userview1()
    {
    $arr=$this->input->post();
    

    $this->load->model('Usermodel1');
    $formArray=array();

    $formArray['Username']=$this->input->post('Username');
    
    $formArray['Password']=$this->input->post('Password');


   // $formArray['registerroll']=$this->input->post('registerroll');
    

    
    print_r($formArray);
    $result=$this->Usermodel1->create($formArray,$arr['registerroll']);
    //echo $userid;
    print_r($result);
    // if($this->usermodel->create($formArray,$arr['registerroll']))
    // {
    //   echo "Sucess";
    // }
    // else
    //  echo "Error";
    
    $this->load->view('Userview1');
    }
    public function index()
	{
		$this->load->view('Userview1');
		
	}
}
?>