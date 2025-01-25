<?php
class userr extends CI_controller{

    function create(){

        <!-- $this->form_validation->set_rules('categoryname','Categoryname','required'); -->
$this->form_validation->set_rules('categorydescription','categorydescription','required');

if($this->form_validation->run()== false){
    $this->load->veiw('create');
}else{

}

    }

}
?>