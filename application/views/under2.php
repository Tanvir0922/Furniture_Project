<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <html>
<head>
<title>Product Details</title>
<script>
    function Addcart(form1)
    {
        form1.action="http://localhost/project/index.php/Addtocartcon";
            form1.submit();
    }
    function Bill(form1)
    {
        form1.action="http://localhost/project/index.php/Checkoutcon";
            form1.submit();
    }
    </script>

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



<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <?php
                            foreach($product as $p)
                            {
                                //print_r($product);
                                $img_name="http://localhost/project/prod_img_upload/".$p['prod_img'];
                            
                            ?>
                            <div class="text-center p-4"> <img id="main-image" src="<?php echo $img_name ?>" width="300" /> </div>
                           
                    </div>
                            </div>
                           
                    <div class="col-md-6">
                        <div class="product p-4">
                        
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left" ></i> <a  href="http://localhost/project/index.php/Homecon" class="button">back</a> </div> <i class="fa fa-shopping-cart text-muted" ></i>
                            </div>
                            <form method="post" >
                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Product Name</span>
                            <input type="hidden" name="Productid" value="<?php echo $p['Productid'];?>">
                            
                                <h5 class="text-uppercase"><?php echo $p['Productname'] ?></h5>
                                <div class="price d-flex flex-row align-items-center"> 
                                    <div class="ml-2"> Price:-<small class="dis-price"><input type="text" name="Price"   value="<?php echo  $p['Productprice']?>" readonly></small><span>Qty:-<input type="text" name="Qty"></span> </div>
                                </div>
                            </div>
                            <p class="about"><?php echo $p['Productdesc'] ?></p>
                            <div class="sizes mt-5">
                                
                            </div>
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4" onclick="Addcart(this.form)">Add to cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                            <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4" onclick="Bill(this.form)">Buy Now</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
                
                            
                            </form>
                            <?php
                            }
                            ?>
                            <div class="cart mt-4 align-items-center">
                            <ul>
            <?php 
           
            foreach($feature as $f)
            {
                ?>
                
   <li><?php echo $f['Featurename'] .":=". $f['Value']; ?></li> 
  
            
                <?php
            }
            ?>
             </ul>


</div>
    
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <?php
 require "front/pages/footer.php";
 ?>
</div>







</body>
</html>





