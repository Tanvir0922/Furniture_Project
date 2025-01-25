

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function register()
    {
       // $this->load->view('register');
//         $this->load->library('form_validation');
//         $this->form_validation->set_rules('First_name','Firstname','required');
//         $this->form_validation->set_rules('Last_name','Lastname','required');
//         $this->form_validation->set_rules('phone','Phone','required');
//         $this->form_validation->set_rules('Email','Email','required');
//         $this->form_validation->set_rules('Password','Password','required');
//         $this->form_validation->set_rules('Confirm Password','Confirm Password','required');

// if($this->form_validation->run()==False)
// {
//     $this->load->view('register');

//  }
// else
// {
    $arr=$this->input->post();
    print_r($arr);

    $this->load->model('register_model');
    $formArray=array();

    $formArray['First_name']=$this->input->post('First_name');
    $formArray['Last_name']=$this->input->post('Last_name');
    $formArray['Phone']=$this->input->post('Phone');
    $formArray['Email']=$this->input->post('Email');
    $formArray['Password']=$this->input->post('Password');
    $formArray['Confirm_Password']=$this->input->post('Confirm_Password');
    print_r($formArray);
    if($this->register_model->create($arr))
    {
      echo "Sucess";
      $this->load->view('register',"Account Created");
      //$this->register->flashdata('msg','your account has been created successfully');
    }
    else
     echo "Error";
    
    //$this->session->flashdata('msg','your account has been created successfully');
   // redirect(url:base_url().'/register');

   // $this->auth_model->create();
 //}
    $this->load->view('register');
    }
    public function index()
	{
		$this->load->view('register');
		
	}
}
?>