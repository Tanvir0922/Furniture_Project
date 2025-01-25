

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
font-family: Arial, sans-serif;
background-color: #f2f2f2;
}
.container {
width: 400px;
margin: 0 auto;
padding: 20px;
background-color: #fff;
border: 1px solid #ccc;
border-radius: 5px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h1 {
text-align: center;
color: #333;
margin-top: 0;
}
p {
text-align: center;
color: #777;
margin-bottom: 20px;
}
label {
display: block;
margin-bottom: 10px;
color: #333;
}
input[type="text"],
input[type="password"] {
width: 100%;
padding: 10px;
margin-bottom: 10px;
border: 1px solid #ccc;
border-radius: 4px;
}
hr {
margin-top: 20px;
margin-bottom: 20px;
border: 0;
border-top: 1px solid #ccc;
}
a {
color: #337ab7;
text-decoration: none;
}
button[type="submit"] {
display: block;
width: 100%;
padding: 10px;
margin-top: 20px;
background-color: #4CAF50;
color: #fff;
border: none;
border-radius: 4px;
cursor: pointer;
font-weight: bold;
}
button[type="submit"]:hover {
background-color: #45a049;
}
.container.signin {
text-align: center;
color: #777;
}
</style>
</head>
<body>
<form method='post' action="Auth/register">
<div class="container">
    <?php
    $msg=$this->session->flashdata('msg');
    if($msg !=  ""){
        echo"your account has been created successfully";
    }
    ?>
<h1>Register Here</h1>

<hr>
<label for="firstname"><b>Enter First name</b></label>
<input type="text" placeholder="Enter First name" name="First_name">

<label for="lastname"><b>Enter Last name</b></label>
<input type="text" placeholder="enter Last name"name="Last_name">

<label for="phone"><b>Enter phone no</b></label>
<input type="text" placeholder="Enter phone no"name="Phone">

<label for="email"><b>Enter Email</b></label>
<input type="text" placeholder="Enter Email" name="Email">

<label for="Password"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="Password">

<label for="Confirm_Password"><b>Confirm Password</b></label>
<input type="password" placeholder="Confirm Password" name="Confirm_Password">



<button type="submit" class="registeation"><strong>Register</strong></button>

</div>
</form>
</body>
</html>