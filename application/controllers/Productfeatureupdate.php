<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Productfeaturecontroller extends CI_Controller
{
   public function Productfeatureupdateview()
   {
     $Productid=$this->input->get("Productid");
    // echo "cat=$categoryid";
     $this->load->model('Productupdatemodel');
     $data["row"]=$this->Productfeatureupdatemodel->getData($Productid);
    // print_r($row);

  
   
  $this->load->view('Productfeatureupdateview',$data);
  }
  public function Productupdateinfo()
  {
    $arr=$this->input->post();
   
    $this->load->model('Productfeatureupdatemodel');
     $res=$this->Productfeatureupdatemodel->updateData($arr);
     if($res)
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('Productfeatureupdateview');


  }
  public function Productdeleteinfo()
  {
    $arr=$this->input->get();
   
    $this->load->model('Productfeatureupdatemodel');
     $res=$this->Productfeatureupdatemodel->deleteData($arr);
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
