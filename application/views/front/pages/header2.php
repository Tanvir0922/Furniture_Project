

 
<html>
 <head>
<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/header2.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
<script>
    function Logout(form1)
    {
        form1.action="http://localhost/project/index.php/Logoutcon"
            form1.submit();
    }
    </script>
</head> 

    
 <header class="section-header">
    <section class="header-main border-bottom">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-4 col-md-4 col-5"> <a href="#" class="brand-wrap" data-abc="true">
                      <span class="logo">EmpaireFshop.</span> </a> </div>
                
                        <form>
                            
                         <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4" onclick="Logout(this.form)">Logout</button>  </div></form>
                        </div> 

                    </div>
                </div>
    </section>
    <nav class="navbar navbar-expand-md navbar-main border-bottom">
        <div class="container-fluid">
            <form class="d-md-none my-2">
                <div class="input-group"> <input type="search" name="search" class="form-control" placeholder="Search" required="">
                    <div class="input-group-append"> <button type="submit" class="btn btn-secondary"> <i class="fa fa-search"></i> </button> </div>
                </div>
            </form> <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#dropdown6" aria-expanded="false"> <span class="navbar-toggler-icon"></span> </button>
            <div class="navbar-collapse collapse" id="dropdown6" style="">
                <ul class="navbar-nav mr-auto">
         
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="http://localhost/project/index.php/Homecon2" data-abc="true">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="http://localhost/project/index.php/Servicescon" data-abc="true">Services</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="http://localhost/project/index.php/Contactcon" data-abc="true">Contact</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="http://localhost/project/index.php/Aboutuscon" data-abc="true">About</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="http://localhost/project/index.php/Cartcon" data-abc="true">Mycart</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="http://localhost/project/index.php/Myordercon" data-abc="true">MyOrder</a> </li>
        
        
                    
                                  </ul>
            </div>
        </div>
    </nav>
</header> 





