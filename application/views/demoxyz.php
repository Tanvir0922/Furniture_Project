<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  
    <head>







    
</head>
<form method='post' action="Productview">
<div class="container">
    
<h1>Register Here</h1>

<hr>
<label for="Product_name"><b>Enter  product_name</b></label>
<input type="text" placeholder="product_name" name="product_name">



<label for="Product_description"><b>Password</b></label>
<input type="text" placeholder="Enter Product_description" name="text">


<label for="Product_qty"><b>Product_qty</b></label>
<input type="text" placeholder="Enter Product_qty" name="text">


<label for="Product_price"><b></b>Product_price</label>
<input type="text" placeholder="Enter Product_price" name="text">


<label for="registerroll">sign up as</label>
<select id="registerroll" name="registerroll">
  <option value="user">Donor</option>
  <option value="customer">Customer</option>
</select>


</div>
</form>
</body>
</html>