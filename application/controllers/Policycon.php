
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policycon extends CI_controller
{

    public function Policy(){

        $this->load->view('Policy');
    }

public function index()
{
    $this->load->view('Policy');
}
}
?>