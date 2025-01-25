
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>






<html>
    <head>
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


<form method='post' action="Servicescon/Services">







<div class="h-screen bg-gray-200">


      <div class="container mx-auto py-20 lg:px-12 sm:px-5">


        <div class="grid lg:grid-cols-3 gap-6">


          <div class="p-3 bg-white shadow rounded-lg px-5 py-6">

            <img src="https://i.imgur.com/gvNYKAh.png" width="50" class="mb-3">

            <span class="font-bold text-xl">Roadmap to success</span>

            <p class="mt-2 text-justify">Mauris nec nisi dapibus, efficitur arcu eu, vehicula ligula. Maecenas dolor elit, pretium et ultrices in, vulputate et augue. Pellentesque efficitur lacus massa, eu tristique lectus tempor in. Suspendisse suscipit venenatis arcu. Aliquam a eleifend tellus. Aliquam lacinia auctor porttitor</p>


            <a href="#" class="flex flex-row items-center mt-3 text-blue-600 hover:text-blue-800">

              <i class="fa fa-long-arrow-right"></i>
              <span class="ml-2">Learn more</span>
              

            </a>
            

          </div>




          <div class="p-3 bg-white shadow rounded-lg px-5 py-6">

            <img src="https://i.imgur.com/qtIK04u.png" width="50" class="mb-3">

            <span class="font-bold text-xl">Goal that matter</span>

            <p class="mt-2 text-justify">Mauris nec nisi dapibus, efficitur arcu eu, vehicula ligula. Maecenas dolor elit, pretium et ultrices in, vulputate et augue. Pellentesque efficitur lacus massa, eu tristique lectus tempor in. Suspendisse suscipit venenatis arcu. Aliquam a eleifend tellus. Aliquam lacinia auctor porttitor</p>


            <a href="#" class="flex flex-row items-center mt-3 text-blue-600 hover:text-blue-800">

              <i class="fa fa-long-arrow-right"></i>
              <span class="ml-2">Learn more</span>
              

            </a>
            

          </div>




          <div class="p-3 bg-white shadow rounded-lg px-5 py-6">

            <img src="https://i.imgur.com/7IPu6pH.png" width="50" class="mb-3">

            <span class="font-bold text-xl">Visible achievement</span>

            <p class="mt-2 text-justify">Mauris nec nisi dapibus, efficitur arcu eu, vehicula ligula. Maecenas dolor elit, pretium et ultrices in, vulputate et augue. Pellentesque efficitur lacus massa, eu tristique lectus tempor in. Suspendisse suscipit venenatis arcu. Aliquam a eleifend tellus. Aliquam lacinia auctor porttitor</p>


            <a href="#" class="flex flex-row items-center mt-3 text-blue-600 hover:text-blue-800">

              <i class="fa fa-long-arrow-right"></i>
              <span class="ml-2">Learn more</span>
              

            </a>
            

          </div>
          

        </div>
        
      </div>


      
    </div>
    <?php
 require "front/pages/footer.php";
 ?>
</form>
</body>
</html>