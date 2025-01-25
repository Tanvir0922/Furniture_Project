<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categoryupdatecontroller extends CI_Controller
{
   public function Categoryupdateview()
   {
     $categoryid=$this->input->get("Categoryid");
    // echo "cat=$categoryid";
     $this->load->model('Categoryupdatemodel');
     $data["row"]=$this->Categoryupdatemodel->getData($categoryid);
    // print_r($row);

  
   
  $this->load->view('Categoryupdateview',$data);
  }
  public function Categoryupdateinfo()
  {
    $arr=$this->input->post();
   
    $this->load->model('Categoryupdatemodel');
     $res=$this->Categoryupdatemodel->updateData($arr);
     if($res)
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('Categoryupdateview');


  }
  public function Categorydeleteinfo()
  {
    $arr=$this->input->get();
   
    $this->load->model('Categoryupdatemodel');
     $res=$this->Categoryupdatemodel->deleteData($arr);
     if($res)
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
   // $this->load->view('Categoryupdateview');


  }

  //   public function index()
  //   {
  //  $this->load->view('Categoryupdateview',$data);
  // $data['cats']=$this->Categoryupdatemodel->getData();
  //      $this->load->view('Categoryview',$data);
       
   }

  
?> 