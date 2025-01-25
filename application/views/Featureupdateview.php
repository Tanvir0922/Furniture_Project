
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

        $fname=$row->Featurename;
        //  $fdesc=$row->Categorydescription;
         $fid=$row->Featureid;
        // echo "Cname=$cname";
     }
     else
     {
        $fname="";
        // $cdesc="";
        $fid="";
     }
     ?>
<form method='post' action="http://localhost/project/index.php/Featureupdatecontroller/Featureupdateinfo">
<div class="container">
    
<!-- <h1>Register Here</h1> -->

<input type="hidden"   placeholder="Enter Featureid" name="Featureid" value="<?php echo $fid?>"  >
<label for="Featurename"><b>Featurename</b></label>
<input type="text"   placeholder="Enter Featurename" name="Featurename" value="<?php echo $fname?>"  >

 

<button type="submit" class="update"><strong>Update</strong></button> 

</div>
</form>
</body>
</html>