 <?php

 defined('BASEPATH') OR exit('No direct script access allowed');

 class Categorycontroller extends CI_Controller
{
    public function Categoryview()
    {
    
    $this->load->model('Categorymodel');
    $data['cats']=$this->Categorymodel->getData();
    
   $this->load->view('Categoryview',$data);
   }
     public function index()
 	{
    //$this->load->view('Categoryview',$data);
    $this->load->model('Categorymodel');
   $data['cats']=$this->Categorymodel->getData();
		$this->load->view('Categoryview',$data);
		
	}
 }
 
?> 