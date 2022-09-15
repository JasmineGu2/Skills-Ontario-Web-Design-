<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Shopping Cart</title>
      <!--bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <!--Favico -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--CSS -->
    <link rel="stylesheet" href="assets/styles.css">

</head>
<body>
    <?php include('header.php'); ?>
    
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
            <div class="col-11 my-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-danger">Attention:</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-text py-auto">
                            <p> We're sorry! This site is in BETA and we aren't taking online orders just yet... </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Shopping Cart</h4>
                     </div>
                <div class="card-body">
                    <div class="card-text py-auto bg-light">
                        <p> You have no items in your shopping cart at the moment.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Checkout</h4>
                     </div>
                <div class="card-body">
                    <div class="card-text py-auto">
                        <p> Summary: <br> Subtotal: <br> Shipping and Handeling: <br> Tax: </p>
                        <div class="bg-light text-center"> 
                            <label for="#"> Coupons or Rewards </label> <input type="text" placeholder="Enter Code"> 
                        </div>
                        <p class="mt-3"> Grand Total:  </p>
                        <button class="btn btn-success px-5 "> Continue </button>
                    </div>
                </div>
                </div>
            </div>

    <?php include('footer.php'); ?>
</body>
</html>