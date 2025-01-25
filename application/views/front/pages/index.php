<html>
  <body>
<?php 
if(isset($_SESSION['Userid']) )
  require ( "header2.php");
else
 require ("header.php");
require ( "main.php");

require ( "footer.php");

?>
</body>
</html>