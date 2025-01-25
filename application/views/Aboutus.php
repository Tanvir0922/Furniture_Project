
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<html>
    <head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/Aboutus.css">
    <style>

. body{background-color:#aabbcc;}

.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #ccc;
  color: #fff;
  border-radius: 20px;
  text-decoration: none;
}

</style>
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

<a  href="http://localhost/project/index.php/Homecon" class="button">back</a>

<form method='post' action="Aboutuscon/Aboutus">










<section class="home-info-grey"> <div class="container"> <div class="row"> <div class="col-md-7"> <h2>What We Believe</h2> <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> </div> 
<div class="col-md-5 drop-cap-text"> <span class="drop-cap"><span class="drop-cap-letter">A</span></span> re you look to expand It is a long established fact that a reader will be distracte </div>

 </div> </div> </section>
 <?php
 require "front/pages/footer.php";
 ?>

</form>
</body>
</html>