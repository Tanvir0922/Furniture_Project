
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

        $pVal=$row->Value;
         //$pdesc=$row->Productdesc;
         //$pqty=$row->Productqty;
         //$pprice=$row->Productprice;
         $pid=$row->Productid;
         $fid=$row->Featureid;
        // echo "Cname=$cname";
     }
     else
     {
         $pVal="";
         //$pdesc="";
         //$pqty="";
         //$pprice="";
         $pid="";
         $fid="";
     }
     ?>
<form method='post' action="http://localhost/project/index.php/Productfeaturecontroller/Productfeatureupdateinfo">
    <!-- <form method='post' action="http://localhost/project/index.php/Productfeaturecontroller/Productfeatureupdateinfo"> -->
<div class="container">
    
<!-- <h1>Register Here</h1> -->

<input type="hidden"   placeholder="Value" name="Productfeatueid" value="<?php echo $pid?>"  >
<!-- <input type="hidden"   placeholder="Value" name="Productfeatueid" value="<?php echo $fid?>"  > -->
<label for="Value"><b>Value</b></label>
<input type="text"   placeholder="Enter Value" name="Value" value="<?php echo $pVal?>"  >



<button type="submit" class="update"><strong>Update</strong></button> 

</div>
</form>
</body>
</html>