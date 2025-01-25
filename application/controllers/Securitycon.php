
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Securitycon extends CI_controller
{

    public function Security(){

        $this->load->view(' Security');
    }

public function index()
{
    $this->load->view(' Security');
}
}
?>