<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>






<html>
    <head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/Policy.css">
</head>

<body>
<?php
 require "front/pages/header.php";
 ?>

<form method='post' action="Policycon/Policy">










    <h1>Website Name - Policy Page</h1>

    <div class="policy-section">
        <h2>Privacy Policy</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere euismod lectus, eget fermentum
            est vulputate nec. Nulla facilisi. Sed euismod ligula in urna fringilla, id rutrum lorem finibus. Fusce
            scelerisque quam at tortor iaculis, vitae tincidunt metus lobortis. Aenean ut venenatis orci.</p>
    </div>

    <div class="policy-section">
        <h2>Cookie Policy</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere euismod lectus, eget fermentum
            est vulputate nec. Nulla facilisi. Sed euismod ligula in urna fringilla, id rutrum lorem finibus. Fusce
            scelerisque quam at tortor iaculis, vitae tincidunt metus lobortis. Aenean ut venenatis orci.</p>
    </div>

    <div class="policy-section">
        <h2>Terms and Conditions</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere euismod lectus, eget fermentum
            est vulputate nec. Nulla facilisi. Sed euismod ligula in urna fringilla, id rutrum lorem finibus. Fusce
            scelerisque quam at tortor iaculis, vitae tincidunt metus lobortis. Aenean ut venenatis orci.</p>
    </div>

    <div class="policy-section">
        <h2>Refund Policy</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam posuere euismod lectus, eget fermentum
            est vulputate nec. Nulla facilisi. Sed euismod ligula in urna fringilla, id rutrum lorem finibus. Fusce
            scelerisque quam at tortor iaculis, vitae tincidunt metus lobortis. Aenean ut venenatis orci.</p>
    </div>
</form>
<?php
 require "front/pages/footer.php";
 ?>
</body>


</html>