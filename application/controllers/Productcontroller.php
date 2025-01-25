<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productcontroller extends CI_Controller
{
   public function Productview()
   {

   
   $this->load->model('Productmodel');
   $data['prod']=$this->Productmodel->getData();
   
  $this->load->view('Productview',$data);
  }
    public function index()
    {
      $this->load->model('Productmodel');
      $data['prod']=$this->Productmodel->getData();
   $this->load->view('Productview',$data);
 
      // echo "wel come";
   }
}

?> 


<!-- delete and edit -->