 
<!-- //defined('BASEPATH') OR exit('No direct script access allowed');

// class Productinsertcontroller extends CI_Controller
// {
//     public function Productinsertview()
//     {
     //$Cate_id=1;
     
     // example-$product_id=1;
    // $this->load->helper('form');
    //  $this->load->model('Productinsertmodel2');
    // $arr=$this->input->post();
    // print_r($arr); 

   
    // if($this->Productinsertmodel2->create($arr))
    // {
    //   echo "Sucess";
    // }
    // else
    //  echo "Error";
    
    //  $this->load->model('Productinsertmodel2');
    //  $data['prod']=$this->Productinsertmodel2->getData();
    //  $this->load->view('Productinsertview',$data);
    // //redirect('Productcontroller');
    // //header('Location:http://localhost/project/index.php/productcontroller');
    // }

    // public function viewcategory()
    // {
    //   $this->load->model('Productinsertmodel2');
    //   $data['prod']=$this->Productinsertmodel2->getData();
     
    //   $this->load->view('Productinsertview',$data);
      
    // }
//     public function index()
// 	{
//     //$this->load->helper('form');
//     echo "wel come to product";
//     $this->load->model('Productinsertmodel2');
//     $data['prod']=$this->Productinsertmodel2->getData();
//     print_r($data);
// 		$this->load->view('productinsertview',$data);
		
// 	}
// } -->



<?php




defined('BASEPATH') OR exit('No direct script access allowed');

class Productinsertcontroller extends CI_Controller
{
     

  public function do_upload()
  {
          $config['upload_path']          = "./prod_img_upload/";
          $config['allowed_types']        = 'gif|jpg|png|jpeg';
          // $config['max_size']             = 100;
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;

          $this->load->library('upload', $config);

          if ( ! $this->upload->do_upload('prod_img'))
          {
            echo "error";
                  $error = array('error' => $this->upload->display_errors());
               print_r($error);
                  $this->load->view('Productinsertview');
          }
          else
          {
                 

                  $arr=$this->input->post();
                   $data= array('upload_data' => $this->upload->data('file_name'));
                   $arr['prod_img']=$data['upload_data'];
                  //arr["product_id"]=$product_id;
                  $this->load->model('Productinsertmodel2');
                  print_r($arr);
                  if($this->Productinsertmodel2->create($arr))
    {
      echo "Sucess";
    }
    else
     echo "Error";


          }
  }
  public function index()
	{
    //$this->load->helper('form');
    echo "wel come to product";
    $this->load->model('Productinsertmodel2');
    $data['prod']=$this->Productinsertmodel2->getData();
    //print_r($data);
		$this->load->view('productinsertview',$data);
		
	}
  
}
?>