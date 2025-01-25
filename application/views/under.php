<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
   <head>


   
    
   <style>


.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #ccc;
  color: #fff;
  border-radius: 20px;
  text-decoration: none;
}



   
  


       /* <img src="http://localhost/project/Asset/images/image3.WEBP" alt="Table" style="max-width: 1500%;">
    */
  
   


</style>
</head>

<body>

<?php
 if(isset($_SESSION['Userid']) )
 {
  require ( "C:\\xampp\\htdocs\project\\application\\views\\front\\pages\\header2.php");
  
 }
 
else
require ("C:\\xampp\\htdocs\project\\application\\views\\front\\pages\\header.php");
 ?>





<a  href="http://localhost/project/index.php/Homecon" class="button">back</a>


    <div class="row">
  
<?php
 foreach($product as $p)
 {
    $img_name="http://localhost/project/prod_img_upload/".$p['prod_img'];
 ?>
 <div class="col-sm-2" style="margin:21px">
    <div class="card" >
    <form action="http://localhost/project/index.php/under2con" method="post">
      <img src="<?php echo $img_name ?>" class="card-img-top" alt="Image not found">
  <div class="card-body">
  <input type="hidden" name="Productid" class="card-title" value="<?php echo $p['Productid'] ?>">
    <h5 class="card-title"><?php echo $p['Productname'] ?></h5>
    <p class="card-text"> <?php echo $p['Productdesc'] ?></p>
    <p class="card-text"> Price :<?php echo $p['Productprice'] ?></p>
    <button  type="submit" class="btn btn-primary">View</button>
  </div>
 </form>
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

