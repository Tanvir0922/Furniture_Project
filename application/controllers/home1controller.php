
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home1controller extends CI_controller
{

    public function home1view(){

        $this->load->view('home1view');
    }

public function index()
{
    $this->load->view('home1view');
}
}
?>