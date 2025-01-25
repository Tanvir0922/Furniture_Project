
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactcon extends CI_controller
{

    public function Contact(){

        $this->load->view('Contact');
    }

public function index()
{
    
    $this->load->view('Contact');
}
}
?>