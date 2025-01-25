<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>

    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/category2.css">
    
</head>
<!-- <form method='post' action="productinsertview"> -->
<form method='post' action="do_upload" enctype="multipart/form-data">
<div class="main">

<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">


    
<div class="Register">

<h2>Product<h2>


<label for="Productname"><b>Productname </b></label>
<input type="text" placeholder="product_name" name="Productname" value="<?= set_value('Productname') ?>" >
<br><br>


<label for="Productdesc"><b>Productdesc</b></label>
<input type="textarea" placeholder="Enter description" name="Productdesc">
<br><br>


<label for="Productqty"><b>Productqty</b></label>
<input type="textarea" placeholder="Enter description" name="Productqty">
<br><br>


<label for="Productprice"><b>Productprice</b></label>
<input type="textarea" placeholder="Enter description" name="Productprice">
<br><br>

<input type="file" name="prod_img" id="prod_img" /><br>

<label for="Cate_id "><b>Cate_id </b></label>
<br>
<select name="Categoryid">
<?php
foreach($prod as $p)
{
    $v= $p['Categoryname'];
    $v1=$p['Categoryid'];
    ?>
    <option value="<?php echo $v1;  ?>"><?php echo $v ?></option>
    <?php
}

?>
</select>

<br><br>
<button type="submit" class="Register"><strong>Register</strong></button>

</div>
</form>
</div>
</body>
</html>