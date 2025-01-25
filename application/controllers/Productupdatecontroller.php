<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productupdatecontroller extends CI_Controller
{
   public function Productupdateview()
   {
     $Productid=$this->input->get("Productid");
    // echo "cat=$categoryid";
     $this->load->model('Productupdatemodel');
     $data["row"]=$this->Productupdatemodel->getData($Productid);
    // print_r($row);

  
   
  $this->load->view('Productupdateview',$data);
  }
  public function Productupdateinfo()
  {
    $arr=$this->input->post();
   
    $this->load->model('Productupdatemodel');
     $res=$this->Productupdatemodel->updateData($arr);
     if($res)
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('Productupdateview');


  }
  public function Productdeleteinfo()
  {
    $arr=$this->input->get();
   
    $this->load->model('Productupdatemodel');
     $res=$this->Productupdatemodel->deleteData($arr);
     if($res)
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
   // $this->load->view('Categoryupdateview');


  }

    //public function index()
    //{
   //$this->load->view('Categoryupdateview',$data);
  //$data['cats']=$this->Categoryupdatemodel->getData();
       //$this->load->view('Categoryview',$data);
       
   }


?> 