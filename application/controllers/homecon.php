
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homecon extends CI_controller
{



public function index()
{
    
    $this->load->model('Homecon_model');
    $data['cat']=$this->Homecon_model->getData();
    $this->load->view('front/pages/index',$data);
}
}
?>