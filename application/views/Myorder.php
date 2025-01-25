<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<html>

<head>

<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/Myorder.css">
</head>
    <body>
    <?php
 if(isset($_SESSION['Userid']) )
 {
  require ( "C:\\xampp\\htdocs\project\\application\\views\\front\\pages\\header2.php");
  //echo "session=".$_SESSION['Userid'];
 }
 
else
require ("C:\\xampp\\htdocs\project\\application\\views\\front\\pages\\header.php");
 ?>




<form method='post' action="Myordercon/Myorder"></form>





<html lang="en">
<head>
  
  <title>Order Page</title>
</head>
<body>
  <div class="order-container">
  <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><a href="http://localhost/project/index.php/Homecon" class="text-muted">Contiune Shoping</a></div>
  <?php
 foreach($orderdeatils as $o)
 {
    $img_name="http://localhost/project/prod_img_upload/".$o['prod_img'];
 ?>
    <h1>Your Order</h1>
    <div class="order-item">
    <img src="<?php echo $img_name ?>" style="max-width: 85%;" >
    
    </div>
    
    
 
  </div>
  <?php
 }
 ?>
 </div>
 


  <?php
 
 require "front/pages/footer.php";
 ?>
 



</body>
</html>