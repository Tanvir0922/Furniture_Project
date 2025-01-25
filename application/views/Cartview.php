<html>

<head>

<link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/Cart.css">
</head>
<?php
 require "front/pages/header2.php";
 ?>


    <body>
    





<div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><a href="http://localhost/project/index.php/Homecon" class="text-muted">Contiune Shoping</a></div>
                    <hr>
                    <h6 class="mb-0">Shopping cart</h6>
                    <div class="d-flex justify-content-between"><span>You have items Add in your cart</span>
                        <div class="d-flex flex-row align-items-center "><div class="text-black-50 col-md-4"></div>
                            <div class="price ml-2 col-md-4"><span class="mr-1">price</span><i class="fa fa-angle-down"></i></div>
                        </div>
                    </div>
                    <?php
                    foreach($cartdetail as $c)
                     {
                        $img_name="http://localhost/project/prod_img_upload/".$c['prod_img'];
                        ?>
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                        <div class="d-flex flex-row"><img class="rounded" src="<?php echo $img_name ?>" width="80">
                            <div class="ml-2"><span class="font-weight-bold d-block"><?php echo $c['Productname']?></span><span class="spec">

                            <?php
                                foreach($c['Description'] as $r)

                                {
                                    //print_r($r);
                                    echo "<br>".$r['Featurename'].":".$r['value'];
                                }
                            ?>
                            </span></div>
                        </div>
                        <div class="d-flex flex-row align-items-center"><span class="d-block"><?php echo $c['Qty']?></span><span class="d-block ml-5 font-weight-bold"><?php echo $c['Productprice']?></span><i class="fa fa-trash-o ml-3 text-black-50"></i></div>
                    </div>
                    <?php
                    }
                    ?>
                    





                </div>
            </div>
                    <?php
 require "front/pages/footer.php";
 ?>
    </div>


                    </body>
                    </html>