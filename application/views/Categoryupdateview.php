
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

        $cname=$row->Categoryname;
         $cdesc=$row->Categorydescription;
         $cid=$row->Categoryid;
        // echo "Cname=$cname";
     }
     else
     {
        $cname="";
        $cdesc="";
        $cid="";
     }
     ?>
<form method='post' action="http://localhost/project/index.php/Categoryupdatecontroller/Categoryupdateinfo">
<div class="container">
    
<!-- <h1>Register Here</h1> -->

<input type="hidden"   placeholder="Enter Categoryname" name="Categoryid" value="<?php echo $cid?>"  >
<label for="Categoryname"><b>Categoryname</b></label>
<input type="text"   placeholder="Enter Categoryname" name="Categoryname" value="<?php echo $cname?>"  >


<label for="Categorydescription"><b>Categorydescription</b></label>
<input type="text"   placeholder="Enter Categorydescription" name="Categorydescription" value="<?php echo $cdesc?>"  >

 

<button type="submit" class="update"><strong>Update</strong></button> 

</div>
</form>
</body>
</html>