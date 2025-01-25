<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class under1 extends CI_controller
{

    public function under(){

        $this->load->view('under');
    }
  public function productview()
  {
    
  }
public function index()
{
  $arr=$this->input->post();
    $this->load->model('Under_model');
    $data['product']=$this->Under_model->getData($arr);
    //print_r($data);
    $this->load->view('under',$data);
    //$this->load->view('under');
}
}
?>

