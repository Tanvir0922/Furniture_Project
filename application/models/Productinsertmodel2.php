



<!-- //defined('BASEPATH') OR exit('No direct script access allowed');

// class Productinsertmodel2 extends CI_model{
    
//     public function create($fromArray)
//     {
//         $res=$this->db->insert('product1',$fromArray);
//           return ($res);

//     }
//     public function getData()
//     {
//         $this->load->database();
//     $q=$this->db->query("select * from category1");
//     return $q->result_array();
//     }
// } -->




<?php




class Productinsertmodel2 extends CI_model{
    
    public function create($fromArray)
    {
        // print_r($fromArray);
        // if(isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        //     $name = $_FILES['image']['name'];
        //     $type = $_FILES['image']['type'];
        //     $data = file_get_contents($_FILES['image']['tmp_name']);
        print_r($fromArray);
        $res=$this->db->insert('product',$fromArray);
          return ($res);

    }
    public function getData()
         {
             $this->load->database();
         $q=$this->db->query("select * from category");
         return $q->result_array();
         }
}
?>