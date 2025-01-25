
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logincon extends CI_controller
{

   //const $page=array();
    public function login(){
        //echo "wel come";
        
        $arr=$this->input->post();
       // $page=$this->input->get['page'];
       // print_r($arr);
        if(isset($_SESSION['page']))
        {
        $page= $_SESSION['page'];
        }
        else
        $page=1;
        $this->load->model('loginmodel');
        $data['user']=$this->loginmodel->getData($arr);
        $userid=$data['user'][0]['Userid'];
        echo "userid=$userid";
        $_SESSION['Userid']=$userid;
        echo "page=$page";
        $_SESSION['flag']=1;
        //print_r($data);
        //$this->load->view('http://localhost/project/index.php/Addtocartcon');
        if($page==1)
        header('Location:http://localhost/project/index.php/homecon');
        else if($page==2)
        {
       header('Location:http://localhost/project/index.php/Addtocartcon');
        }
       else if($page==3)
       header('Location:http://localhost/project/index.php/Checkoutcon');
    }

public function index()
{
   // $data['page']=$this->input->get();
   // print_r($page);
    $this->load->view('login');
}
}
?>