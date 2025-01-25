<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logoutcon extends CI_controller
{

public function index()
{
 $_SESSION["Userid"]="";
 unset($_SESSION["Userid"]);
 unset($_SESSION["page"]);
 //$this->load->view('http://localhost/project/index.php/homecon');
 header('Location:http://localhost/project/index.php/homecon');
}
}
?>