<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productfeatureinsertcontroller extends CI_Controller
{
    public function Productfeatureinsertview()
    {
      $arr=$this->input->post();
     $this->load->model('Productfeatureinsertmodel');
    
    //print_r($arr);

   
    if($this->Productfeatureinsertmodel->create($arr))
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
     $this->load->model('Productfeatureinsertmodel');
     $data['prod']=$this->Productfeatureinsertmodel->getData();
     $data['feature']=$this->Productfeatureinsertmodel->getData_feature();
		$this->load->view('productfeatureinsertview',$data);
    // $this->load->view('Productfeatureinsertview',$data);
    //redirect('Productcontroller');
    //header('Location:http://localhost/project/index.php/productcontroller');
    }

    public function viewproduct()
    {
      $this->load->model('Productfeatureinsertmodel');
      $data['prod']=$this->Productfeatureinsertmodel->getData();
      $this->load->view('Productfeatureinsertview',$data);
      
    }

    public function viewfeature()
    {
      $this->load->model('Productfeatureinsertmodel');
      $data['feature']=$this->Productfeatureinsertmodel->getData();
      $this->load->view('Productfeatureinsertview',$data);
      
    }


    public function index()
	{
    //$this->load->helper('form');
    echo "wel come to product";
    $this->load->model('Productfeatureinsertmodel');
    $data['prod']=$this->Productfeatureinsertmodel->getData();
    //$this->load->model('Productfeatureinsertmodel');
    $data['feature']=$this->Productfeatureinsertmodel->getData_feature();
		$this->load->view('productfeatureinsertview',$data);
    //print_r($data);
		
	}

    // public function index()
	// {
    // //$this->load->helper('form');
    // echo "wel come to product";
    // $this->load->model('Productfeatureinsertmodel');
    // $data['prod']=$this->Productfeatureinsertmodel->getData();
	// 	$this->load->view('productfeatureinsertview',$data);
		
	// }
}



?>