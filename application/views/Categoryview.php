<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
<html>
    <head>
</head>
<form method='post' action="Categorycontroller/Categoryview">
<div class="container">
    
<h1><b><i>Category</i></b></h1>

<hr>
 <table border="2px">

<tr><th>Category_name</th>
<th>Category_description</th>
<th></th>
</tr>

<!-- <th><button type="submit" class="update"><strong>Delete</strong></button></th> -->

<?php
foreach($cats as $c)
{
    ?>

<tr><td><input type="text" placeholder="Categoryname" name="Categoryname" value="<?php echo $c['Categoryname']?>"> </td>
<td><input type="text" placeholder="Categorydescription" name="Categorydescription" value="<?php echo $c['Categorydescription']?>"> </td>
<td><a href="http://localhost/project/index.php/Categoryupdatecontroller/Categoryupdateview?Categoryid=<?php echo $c["Categoryid"]; ?>">Edit</a>
<a href="http://localhost/project/index.php/Categoryupdatecontroller/Categorydeleteinfo?Categoryid=<?php echo $c["Categoryid"]; ?>"">Delete</a></td>

</tr>
<?php
}
?>

    
 </table> 
 </div> 
 </form> 
 </body> 
 </html> 

