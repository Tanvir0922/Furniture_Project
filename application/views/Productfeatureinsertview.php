<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
    



<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/category2.css">
</head>
<form method='post' action="Productfeatureinsertcontroller/Productfeatureinsertview">
<div class="main">


<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">

<h2>Product_feature<h2>
    
<div class="Register">




<label for="Productid "><b>Enter Productid </b></label>

<select name="Productid">
<?php
foreach($prod as $p)
{
    $v= $p['Productname'];
    $v1=$p['Productid'];
    echo "prod id=$v1";
    ?>
    <option value="<?php echo $v1 ?>"><?php echo $v ?></option>
    <?php
}
?>
</select><br><br>

<label for="Featureid "><b>Enter Featureid </b></label>

<select name="Featureid">
<?php
foreach($feature as $f)
{
    $v= $f['Featurename'];               
    $v1=$f['Featureid'];
    echo "feature id=$v1";
    ?>
       <option value="<?php echo $v1 ?>"><?php echo $v ?></option>
    <?php
}
?>
</select><br><br>

<label for="Value"><b>Enter Value </b></label>
<input type="text" placeholder="Value" name="Value" value="<?= set_value('Value') ?>" >
<br><br>
<button type="submit" class="Register"><strong>Insert</strong></button>

</div>
</form>
</div>
</body>
</html>