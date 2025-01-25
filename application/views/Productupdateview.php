
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
</head>
<body>
    <?php
   // print_r($row);
     if(isset($row))
     {

        $pname=$row->Productname;
         $pdesc=$row->Productdesc;
         $pqty=$row->Productqty;
         $pprice=$row->Productprice;
         $pid=$row->Productid;
        // echo "Cname=$cname";
     }
     else
     {
         $pname="";
         $pdesc="";
         $pqty="";
         $pprice="";
         $pid="";
     }
     ?>
<form method='post' action="http://localhost/project/index.php/Productupdatecontroller/Productupdateinfo">
<div class="container">
    
<!-- <h1>Register Here</h1> -->

<input type="hidden"   placeholder="Enter Productname" name="Productid" value="<?php echo $pid?>"  >
<label for="Productname"><b>Productname</b></label>
<input type="text"   placeholder="Enter Productname" name="Productname" value="<?php echo $pname?>"  >


<label for="Productdesc"><b>Productdescription</b></label>
<input type="text"   placeholder="Enter Productdescription" name="Productdesc" value="<?php echo $pdesc?>"  >

 
<label for="Productqty"><b>Productqty</b></label>
<input type="text"   placeholder="Enter Productqty" name="Productqty" value="<?php echo $pqty?>"  >


<label for="Productprice"><b>Productprice</b></label>
<input type="text"   placeholder="Enter Productprice" name="Productprice" value="<?php echo $pprice?>"  >

<button type="submit" class="update"><strong>Update</strong></button> 

</div>
</form>
</body>
</html>