
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>










<html lang="en">
  <head>
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/Admin.css">



  <title>Dashboard UI</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  
	


  </head>



  <body>
  <form method='post' action="Admincon/Adminview">
    




<body>

<div class="sidebar">
	<h1 class="logo">M</h1>
	<i class="fa fa-chevron-left menu-icon"></i>
	<ul class="sidenav">
		<li class="active"><a href="#">Data
			<span class="span1"><i class="fa fa-angle-right"></i></span>
		</a>
	</li>

	<ul class="dropdown">
		<li><a href="http://localhost/project/index.php/Productcontroller"><span class="dot"></span>Product</a></li>
		<li><a href="http://localhost/project/index.php/Productinsertcontroller"><span class="dot"></span> ProductInsert</a></li>
		<p class="app">Change a Category</p>
		<li><a href="http://localhost/project/index.php/Categorycontroller"><span class="dot"></span> Category</a></li>
		<li><a href="http://localhost/project/index.php/Categoryinsertcontroller"><span class="dot"></span> CategoryInsert</a></li>

		
	</ul>

	<li><i class="fa fa-file"></i><a href="#">Layout</a></li>
	<p class="app">App Ans Pages</p>


	
	<li><i class="fa fa-clone"></i><a href="#">Invoice</a></li>

	<li><i class="fa fa-shield"></i><a href="#">Permission</a></li>
	<li><i class="fa fa-user"></i><a href="http://localhost/project/index.php/Homecon">Logout</a></li>

	</ul>
</div>













<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/chart.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".span1").click(function(){
			$(".dropdown").slideToggle(500);
		});
	});
	$('.sidenav li').click(function(){
		$('.sidenav li').removeClass("active");
		$(this).addClass("active");
	})
</script>

<script type="text/javascript">
	$(".menu-icon").click(function(e) {
        e.preventDefault();
        $(".menu-icon").toggleClass("menuicon");
        $(".main").toggleClass("main-width");
        $(".sidebar").toggleClass("active1");
        $(".sidenav li a").toggleClass("anchor");
        $(".sidenav li").toggleClass("lislide");
        $(".sidenav p").toggleClass("apphide");
        $(".logo span").toggleClass("headspan");
        $(".logo").toggleClass("lm");

});


</script>


 

  
		
	   
</form>
	</body>


	</html>