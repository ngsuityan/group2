<?php
    if(!empty($_GET['tid'])){
        $get = filter_var_array($_GET,FILTER_SANITIZE_STRING);

        $tid = $get['tid'];
        $product = $get['product'];

    }else{
        header('location:payment.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
</head>
<body>
<?php
    include "../View Interface/Header.php";
    
?>
<div class="container-fluid content mb-5">
		<div class="col-lg-12 py-4" align="center" style="font-size: 20px;">
        <fieldset>
            <legend><h1>Thank you for purchasing</h1></legend>
            <hr>
            <p>Your transaction ID is <?php echo $tid;?></p>
            <p>Check your email for more info</p>
            

        </fieldset>
        </div>
</div>
</body>
</html>