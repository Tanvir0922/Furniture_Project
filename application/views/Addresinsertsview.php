<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>

    


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
<form method='post' action="Addresinsertcon/Addresinsertsview" enctype="multipart/form-data"> 

 <div class="main">
<div class="container">

<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">







<h1>Address</h1>



<label for="Userid"><b>Userid</b></label><br>
<input type="text"   placeholder="Enter Userid" name="Userid" ><br><br>

<label for="Buildingno"><b>Buildingno</b></label><br>
<input type="text"   placeholder="Enter Buildingno" name="Buildingno" ><br><br>


<label for="Buildname"><b>Buildname</b></label><br>
<input type="text"   placeholder="Enter Buildname" name="Buildname" ><br><br>




<label for="City"><b>City</b></label><br>
<input type="text"   placeholder="Enter City" name="City" ><br><br>

<label for="State"><b>State</b></label><br>
<input type="text"   placeholder="Enter State" name="State" ><br><br>

<label for="Pincode"><b>Pincode</b></label><br>
<input type="text"   placeholder="Enter Pincode" name="Pincode" ><br><br>














 <button type="submit" class="insert"><strong>Save</strong></button>

</div>
</div> 
    </div>



</body>
</html>














