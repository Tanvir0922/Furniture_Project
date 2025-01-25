
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class under2con extends CI_controller
{

    public function detailview(){
        $arr=$this->input->post();
        //print_r($arr);
        $this->load->model('Under2_model');
        $data['product']=$this->Under2_model->getData($arr);
        $data['feature']=$this->Under2_model->getData_feature($arr);
        $this->load->view('under2',$data);
    }

public function index()
{
   
    $arr=$this->input->post();
    //print_r($arr);
    $this->load->model('Under2_model');
    $data['product']=$this->Under2_model->getData($arr);
    $data['feature']=$this->Under2_model->getData_feature($arr);
    $this->load->view('under2',$data);
}
}
?>