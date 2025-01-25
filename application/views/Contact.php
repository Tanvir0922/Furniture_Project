

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>






<html>
    <head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/Contact.css">
    <style>

. body{background-color:#aabbcc;}

.button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #ccc;
  color: #fff;
  border-radius: 20px;
  text-decoration: none;
}

</style>
</head>
<body>

<?php
  if(isset($_SESSION['Userid']) )
  {
   require ( "C:\\xampp\\htdocs\project\\application\\views\\front\\pages\\header2.php");
   //echo "session=".$_SESSION['Userid'];
  }
  
 else
 require ("C:\\xampp\\htdocs\project\\application\\views\\front\\pages\\header.php");
 ?>


<a  href="http://localhost/project/index.php/Homecon" class="button">back</a>

<form method='post' action="Contactcon/Contact">

<div class="container d-flex justify-content-center">
			<div class="row my-2 mx-2">
				<div class="col-md-6">
			<img src="https://png.pngtree.com/png-vector/20190725/ourlarge/pngtree-message-icon-design-vector-png-image_1587713.jpg" alt="IMG">	
		</div><!--col-->
			<div class="col-md-6">
					<h2 class="form-title">Contact us</h2>
						<p class="justify text-muted">Have an enquiry or would like to give us feedback?<br>Fill out the form below to contact our team.</p>

					<form>
						<div class="form-group pt-2 pl-1">
							<label for="exampleInputName">Your name</label>
							<input type="text" class="form-control" id="exampleInputName">
						</div>

						<div class="form-group pl-1">
							<label for="exampleInputEmail1">Your email address</label>
 						 	<input type="email" class="form-control" id="exampleInputEmail1">
						</div>

						<div class="form-group pl-1">
    						<label for="exampleFormControlTextarea1">Your message</label>
    						<textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

  						</div>
  						<div class="row">
  							<div class="col-md-3 offset-md-9"><button type="submit" class="btn btn-primary">Send</button></div>
  						</div>
						
  						
  					</form>
						
			</div><!--col-->
		</div><!--row-->
			
		</div>
        <?php
 require "front/pages/footer.php";
 ?>


</form>
</body>
</html>