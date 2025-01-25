<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class indexcontroller extends CI_Controller
{
   public function main()
   {
   
   
  $this->load->view('main');
  }
    public function index()
    {
   //$this->load->view('Categoryview',$data);
  // $this->load->model('Categorymodel');
 // $data['cats']=$this->Categorymodel->getData();
       
        
        $this->load->view('header');
        $this->load->view('main');
        $this->load->view('footer');
   }
}

?> 