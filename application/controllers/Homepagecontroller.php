
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepagecontroller extends CI_controller
{

    public function Homepageview(){

        $this->load->view('Homepageview');
    }

public function index()
{
    $this->load->view('Homepageview');
}
}
?>