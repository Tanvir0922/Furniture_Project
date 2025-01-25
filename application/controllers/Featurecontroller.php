<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Featurecontroller extends CI_Controller
{
   public function Featureview()
   {
   
   $this->load->model('Featuremodel');
   $data['fats']=$this->Featuremodel->getData();
   
  $this->load->view('Featureview',$data);
  }
    public function index()
    {
//    $this->load->view('Featureview',$data);
//   $data['fats']=$this->Featuremodel->getData();
//        //$this->load->view('Categoryview',$data);
       

       
         //$this->load->view('Featureview',$data);
         $this->load->model('Featuremodel');
        $data['fats']=$this->Featuremodel->getData();
           $this->load->view('Featureview',$data);
     

   }
}

?> 