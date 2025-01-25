<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
<html>
    <head>
</head>
<form method='post' action="Productfeatureview">
<div class="container">
    
<h1><b><i>ProductFeatur</i></b></h1>

<hr>
 <table border="2px">

<tr><th>Value</th>
<!-- <th>Productdesc	</th>
<th>Productqty</th>
<th>Productprice</th> -->
<th></th>
</tr>

<!-- <th><button type="submit" class="update"><strong>Delete</strong></button></th> -->

<?php
foreach($prod as $p)
//foreach($abc as $a)
{
    ?>

<tr><td><input type="text" placeholder="Value" name="Value" value="<?php echo $p['Value']?>"> </td>

<td><a href="http://localhost/project/index.php/Productfeaturecontroller/Productfeaureupdateview?Productid=<?php echo $p["Productid"]; ?>">Edit</a>
<a href="http://localhost/project/index.php/Productfeaturecontroller/Productfeauredeleteinfo?Productid=<?php echo $p["Productid"]; ?>">Delete</a></td>



</tr>
<?php
}


?>


    
 </table> 
 </div> 
 </form> 
 </body> 
 </html> 