
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myordercon extends CI_controller
{

    

public function index()
{
    $this->load->model('Myordermodel');
   $data['orderdeatils']=$this->Myordermodel->getData();
    $this->load->view('Myorder',$data);
}
}
?>