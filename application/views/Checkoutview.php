<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Cart/Wishlist Page Design</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/Check.css">
    <script>
        function goto(form1)
        {
            form1.action="http://localhost/project/index.php/Billcon"
                form1.submit();
        }
        </script>
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


<?php
$u=array('Userid'=>$_SESSION['Userid'],'Name'=>"",'Contact'=>"", 'Email'=>"",'Pincode'=>"",'Pincode'=>"",'Address'=>"");
if($userinfo!=null)
{
   

foreach($userinfo as $u)
{
    echo "edit page";
    //$u=$u1;
    //print_r($userinfo);
    
}
} 

?>

<form method='post' action="http://localhost/project/index.php/Checkoutcon/Checkout">







    <div class="py-3 py-md-4 checkout">
        <div class="container">
            <h4>Checkout</h4>
            <hr>

            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            EmpaireShop:
                        
                        </h4>
                        <hr>
                        <small>* Items will be delivered in 3 - 5 days.</small>
                        <br/>
                        <small>* Tax and other charges are included ?</small>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Basic Information
                        </h4>
                        <hr>

                        <form action="" method="POST">
                       
                                    
                                    <input type="hidden" name="Userid" class="form-control" placeholder="Enter Full Name"  value="<?php echo $u['Userid'] ?>"/>
                                
                            <div class="row">
                            
                                <div class="col-md-6 mb-3">
                                    <label>Full Name</label>
                                    <input type="text" name="Name" class="form-control" placeholder="Enter Full Name"  value="<?php echo $u['Name'] ?>"/>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Phone Number</label>
                                    <input type="number" name="Contact" class="form-control" placeholder="Enter Phone Number" value="<?php echo $u['Contact'] ?>"/>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Email Address</label>
                                    <input type="email" name="Email" class="form-control" placeholder="Enter Email Address" value="<?php echo $u['Email'] ?>" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Pin-code (Zip-code)</label>
                                    <input type="number" name="Pincode" class="form-control" placeholder="Enter Pin-code" value="<?php echo $u['Pincode'] ?>"/>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Full Address</label>
                                    <textarea name="Address" class="form-control" rows="2"><?php echo $u['Address'] ?>"</textarea>
                                </div>
                                <div>
        <button type="submit" name="but" value="Save">Save</button>
</div>
                                <div class="col-md-12 mb-3">
                                    <label>Select Payment Mode: </label>
                                    <div class="d-md-flex align-items-start">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link fw-bold" id="cashOnDeliveryTab-tab" data-bs-toggle="pill" data-bs-target="#cashOnDeliveryTab" type="button" role="tab" aria-controls="cashOnDeliveryTab" aria-selected="true">Cash on Delivery</button>

                                            <button class="nav-link fw-bold" id="onlinePayment-tab" data-bs-toggle="pill" data-bs-target="#onlinePayment" type="button" role="tab" aria-controls="onlinePayment" aria-selected="false">Online Payment</button>
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane fade" id="cashOnDeliveryTab" role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6>Cash on Delivery Mode</h6>
                                                <hr/>
                                                <button type="button" class="btn btn-primary" onclick="goto(this.form)">Place Order (Cash on Delivery)</button>

                                            </div>
                                            <div class="tab-pane fade" id="onlinePayment" role="tabpanel" aria-labelledby="onlinePayment-tab" tabindex="0">
                                                <h6>Online Payment Mode</h6>
                                                <hr/>
                                                <button type="button" class="btn btn-warning">Pay Now (Online Payment)</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
     <?php
    // }
     //$u=$userinfo[0];
     //}
     ?> 
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>