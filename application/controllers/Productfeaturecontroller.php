<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productfeaturecontroller extends CI_Controller
{
   public function Productfeatureview()
   {
   
   $this->load->model('Productfeaturemodel');
   $data['prod']=$this->Productfeaturemodel->getData();
   
  $this->load->view('Productfeatureview',$data);
  }
    public function index()
    {
  // $this->load->view('Productfeatureview',$data);
  //$data['abc']=$this->Productfeaturemodel->getData();
       //$this->load->view('Categoryview',$data);
       


       {
         //$this->load->view('Categoryview',$data);
         $this->load->model('Productfeaturemodel');
        $data['prod']=$this->Productfeaturemodel->getData();
           $this->load->view('Productfeatureview',$data);
           
        }
     
   }
}

?> 

