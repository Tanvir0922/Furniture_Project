
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <!-- <html>
    <head>      
</head> 
<body>

 
<form method='post' action="Userdemoview">
<div class="container">

<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">   
<h1>Register Here</h1>

<hr> -->


<!-- <label for="Username"><b>Username</b></label>
<input type="text" placeholder="Username" name="Username"><br><br>

<label for="Email"><b>Email</b></label>
<input type="text" placeholder="Email" name="Email"><br><br>


<label for="Contact"><b>Contact</b></label>
<input type="text" placeholder="Contact" name="Contact"><br><br>

<label for="Password"><b>Password</b></label>
<input type="text" placeholder="Password" name="Password"><br><br>

<button type="submit" class="Register"><strong>Register</strong></button>
 -->

<!-- </div>
</div>
</form>

</body>


</html>-->


<html>
<head>
<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/login.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/bootstrap.min.css">
  </head>

<?php
 require "front/pages/header.php";
 ?>



<body>
<div class="container">
  <div class="frame">
    <div class="nav">
      <ul class="links">
        <li class="signin-active"><a class="btn">Register</a></li>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
                    <form class="form-signin" action="http://localhost/project/index.php/Userdemocontroller/Userdemoview" method="post" name="form">
          <label for="Username">Username</label>
          <input class="form-styling" type="text" name="Username" placeholder=""/>

          <label for="Email">Email</label>
          <input class="form-styling" type="text" name="Email" placeholder=""/>
          
          <label for="Contact">Contact</label>
          <input class="form-styling" type="text" name="Contact" placeholder=""/>

          <label for="Password">Password</label>
         
          <input class="form-styling" type="text" name="Password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
        
          <div class="btn-animate">
          <button class=btn-signin>register</button>
         </div>
                    </form>
        




 </div>
</div>
<div>
                    </div>
                    </div>

</body>
</html>




