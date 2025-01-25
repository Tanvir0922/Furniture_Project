<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
<html>
    <head>
</head>
<form method='post' action="Productcontroller/Productview">
<div class="container">
    
<h1><b><i>Product</i></b></h1>

<hr>
 <table border="2px">

<tr><th>Productname	</th>
<th>Productdesc	</th>
<th>Productqty</th>
<th>Productprice</th>
<th></th>
</tr>

<!-- <th><button type="submit" class="update"><strong>Delete</strong></button></th> -->

<?php
foreach($prod as $p)
{
    ?>

<tr><td><input type="text" placeholder="Productname" name="Productname" value="<?php echo $p['Productname']?>"> </td>
<td><input type="text" placeholder="Productdesc" name="Productdesc" value="<?php echo $p['Productdesc']?>"> </td>
<td><input type="text" placeholder="Productqty" name="Productqty" value="<?php echo $p['Productqty']?>"> </td>
<td><input type="text" placeholder="Productprice" name="Productprice" value="<?php echo $p['Productprice']?>"> </td>
<td><a href="http://localhost/project/index.php/Productupdatecontroller/Productupdateview?Productid=<?php echo $p["Productid"]; ?>">Edit</a>
<a href="http://localhost/project/index.php/Productupdatecontroller/Productdeleteinfo?Productid=<?php echo $p["Productid"]; ?>"">Delete</a></td>

</tr>
<?php
}
?>

    
 </table> 
 </div> 
 </form> 
 </body> 
 </html> 