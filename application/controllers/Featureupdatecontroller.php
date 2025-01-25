<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Featureupdatecontroller extends CI_Controller
{
   public function Featureupdateview()
   {
     $featureid=$this->input->get("Featureid");
    // echo "cat=$categoryid";
     $this->load->model('Featureupdatemodel');
     $data["row"]=$this->Featureupdatemodel->getData($featureid);
    // print_r($row);

  
   
  $this->load->view('Featureupdateview',$data);
  }
  public function Featureupdateinfo()
  {
    $arr=$this->input->post();
   
    $this->load->model('Featureupdatemodel');
     $res=$this->Featureupdatemodel->updateData($arr);
     if($res)
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('Featureupdateview');


  }
  public function Featuredeleteinfo()
  {
    $arr=$this->input->get();
   
    $this->load->model('Featureupdatemodel');
     $res=$this->Featureupdatemodel->deleteData($arr);
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