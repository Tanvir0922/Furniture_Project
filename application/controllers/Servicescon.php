
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicescon extends CI_controller
{

    public function Services(){

        $this->load->view('Services');
    }

public function index()
{
    $this->load->view('Services');
}
}
?>