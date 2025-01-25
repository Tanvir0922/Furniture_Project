
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Cartcon extends CI_controller
{

    public function Cartview(){

        $this->load->view('Cartview');
    }

public function index()
{
    $arr=$this->input->post();
    
    //print_r($arr);
    $this->load->model('Cartmodel');
    $data['cartdetail']=$this->Cartmodel->getData();
    
    $this->load->view('Cartview',$data);
    
}
}
?>