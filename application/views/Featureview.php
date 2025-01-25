<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!DOCTYPE html>
<html>
    <head>
</head>
<form method='post' action="Featurecontroller/Featureview">
<div class="container">
    
<h1><b><i>Feature</i></b></h1>

<hr>
 <table border="2px">

<tr><th>Featurename</th>
<!-- <th>Category_description</th> -->
<th></th>
</tr>

<!-- <th><button type="submit" class="update"><strong>Delete</strong></button></th> -->

<?php
foreach($fats as $f)
{
    ?>

<tr><td><input type="text" placeholder="Featurename" name="Featurename" value="<?php echo $f['Featurename']?>"> </td>
<!-- <td><input type="text" placeholder="Categorydescription" name="Categorydescription" value="< </td> -->
<td><a href="http://localhost/project/index.php/Featureupdatecontroller/Featureupdateview?Featureid=<?php echo $f['Featureid']; ?>">Edit</a>
<a href="http://localhost/project/index.php/Featureupdatecontroller/Featuredeleteinfo?Featureid=<?php echo $f['Featureid']; ?>">Delete</a></td>

</tr>
<?php
}
?>

    
 </table> 
 </div> 
 </form> 
 </body> 
 </html> 

