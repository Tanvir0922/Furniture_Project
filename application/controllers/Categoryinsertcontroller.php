<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoryinsertcontroller extends CI_Controller
{
       public function index()
	{
		$this->load->view('Categoryinsertview');
		
	}

  public function do_upload()
  {
          $config['upload_path']          = "./cat_img_upload/";
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          // $config['max_size']             = 100;
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('cat_img'))
          {
            echo "error";
                  $error = array('error' => $this->upload->display_errors());
               print_r($error);
                  $this->load->view('Categoryinsertview');
          }
          else
          {
                 

                  $arr=$this->input->post();
                   $data= array('upload_data' => $this->upload->data('file_name'));
                   $arr['cat_img']=$data['upload_data'];
                  //arr["product_id"]=$product_id;
                  $this->load->model('Categoryinsertmodel');
                  //print_r($arr);
                  if($this->Categoryinsertmodel->create($arr))
    {
      echo "Sucess";
    }
    else
     echo "Error";


          }
  }

  
}
?>