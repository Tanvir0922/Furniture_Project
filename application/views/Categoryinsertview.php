<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>

    
<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/category.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/category2.css">

     <!-- <style>
        body {
            background-color: #3B3B3B;;
        }

        .container {
            background-color: transparent;
        }
    </style>  -->
</head>

<body>
<form method='post' action="do_upload" enctype="multipart/form-data"> 

 <div class="main">
<div class="container">

<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">







<h1>Category</h1>


<label for="Categoryname"><b>Categoryname</b></label><br>
<input type="text"   placeholder="Enter Categoryname" name="Categoryname" ><br><br>


<label for="Categorydescription"><b>Categorydescription</b></label><br>
<input type="text"   placeholder="Enter Categorydescription" name="Categorydescription" ><br><br>


<input type="file" name="cat_img" id="cat_img" /><br><br>

 <button type="submit" class="insert"><strong>Insert</strong></button>

</div>
</div> 
    </div>



</body>
</html>














