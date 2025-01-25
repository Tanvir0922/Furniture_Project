<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<html>
<head>
<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/login.css">


  </head>

<?php
 require "front/pages/header.php";
 ?>

<a  href="http://localhost/project/index.php/Homecon" class="button">back</a>

<body>
<div class="container">
  <div class="frame">
    <div class="nav">
      <ul class="links">
        <li class="signin-active"><a class="btn">login</a></li>
      </ul>
    </div>
   
    <div ng-app ng-init="checked = false">
                    <form class="form-signin" action="http://localhost/project/index.php/logincon/login" method="post" name="form">
          <label for="username">Username</label>
          <input class="form-styling" type="text" name="Username" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="Password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
          <div class="btn-animate">
            
          <button class=btn-signin>Login</button>
         </div>
                    </form>
        
 </div>
 
 
 
</div>
                    </div>
                    
                    </div>



</body>

</html>