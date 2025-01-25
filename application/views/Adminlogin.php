<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/Admin1.css">
</head>
<script>
    function login(form1)
    {
        form1.action="http://localhost/project/index.php/Admincon";
            form1.submit();
    }
	</script>

<body>
  
<form method='post' action="Adminlogin" > 







  <div class="login-form">
     <h1>Admin</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " id="Username">
       <i class="mdi mdi-account"></i>
     </div>
     <div class="form-group log-status">
       <input type="text" class="form-control" placeholder="Password" id="Passwod">
       <i class="mdi mdi-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Lost your password?</a>
     <button type="button" class="log-btn"  onclick="login(this.form)">Log in</button>
     
    
   </div>
</body>
</html>