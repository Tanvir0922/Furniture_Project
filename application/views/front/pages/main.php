
 <html>
 <head>

<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/bootstrap.min.css">




<style>
   
   body{background-color:#aabbcc;}


       /* <img src="http://localhost/project/Asset/images/image3.WEBP" alt="Table" style="max-width: 1500%;">
    */
  
</style>


<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
</head>

 <body>
 









<div class="row" >
  
  <?php
   foreach($cat as $c)
   {
      $img_name="http://localhost/project/cat_img_upload/".$c['cat_img'];
   ?>
   <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
      <form action="http:\\localhost\project\index.php\under1" method="post">
    <img src="<?php echo $img_name ?>" class="card-img-top" alt="Image not found">
    <div class="card-body">
    <input type="hidden" name="Categoryid" class="card-title" value="<?php echo $c['Categoryid'] ?>">
      <h5 class="card-title"><?php echo $c['Categoryname'] ?></h5>
      <p class="card-text"> <?php echo $c['Categorydescription'] ?></p>
     
      <button  class="btn btn-primary">View</button>
    </div>
   </form>
  </div>
  
  </div>
  <?php
   }
   ?>
  </div>      
   
        
  

  </body>
  </html>