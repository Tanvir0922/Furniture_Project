<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>

    
<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/category.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/category2.css">

</head>
<form method='post' action="Featureinsertview">

<div class="main">
<div class="container">
    
<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">

    
<!-- <h1>Register Here</h1> -->


<label for="Featurename"><b>Featurename</b></label>
<input type="text"   placeholder="Enter Featurename" name="Featurename" >


<!-- <label for="Categorydescription"><b>Categoryname</b></label>
<input type="text"   placeholder="Enter Categorydescription" name="Categorydescription" > -->

 <button type="submit" class="insert"><strong>Insert</strong></button>
<!-- <button type="submit" class="search"><strong>Search</strong></button>
<button type="submit" class="delete"><strong>Delete</strong></button>
<button type="submit" class="update"><strong>Update</strong></button> -->

</div>
</form>
</div>
</body>
</html>