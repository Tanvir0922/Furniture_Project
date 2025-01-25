
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecon2 extends CI_controller
{



public function index()
{
    $this->load->model('Homemodel2');
    $data['cat']=$this->Homemodel2->getData();
    $this->load->view('front/pages/index1',$data);
}
}
?>