
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class Admincon extends CI_controller
// {

//     public function Adminview(){

//         $this->load->view('Adminview');
//     }

// public function index()
// {
//     $this->load->view('Adminview');
// }
// }
// 


class Admincon extends CI_Controller
{
    public function Adminview()
    {
      //for foregin key
     // example-$product_id=1;

    $arr=$this->input->post();
    print_r($arr);

    //arr["product_id"]=$product_id;

    $this->load->model('Adminmodel');
    $formArray=array();


    $formArray['Userid']=$this->input->post('Userid');
    $formArray['Password']=$this->input->post('Password');
    // $formArray['Contact']=$this->input->post('Contact');
    // $formArray['Password']=$this->input->post('Password');

    print_r($formArray);
    if($this->Userdemomodel->create($arr))
    {
      echo "Sucess";
    }
    else
     echo "Error";
    
    $this->load->view('Adminview');
    }
    public function index()
	{
		$this->load->view('Adminview');
		
	}
}

?>