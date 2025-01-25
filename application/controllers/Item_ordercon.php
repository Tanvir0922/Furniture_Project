
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_ordercon extends CI_controller
{

    public function Item_order(){

        $this->load->view('Item_order');
    }

public function index()
{
    $this->load->view('Item_order');
}
}
?>