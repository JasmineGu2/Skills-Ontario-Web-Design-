<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<style>
    .blue {
  background-color:#202155;
  color: #202155;
}
</style>
</head>
    <div class="container blue h-150">
        <p class="text-white py-2"> Call us at 647-987-1276!! </p>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
        <div class="col-3">
        <navbar>
            <ul class="navbar-nav ms-auto">
            <li class="btn btn-white btn-outline-dark px-3 mx-1 py-4">
                <a href="index.php" class="nav-link text-dark">HOME</a>
            </li>
             <li class="btn btn-white btn-outline-dark px-5 mx-1 py-4">
                <a href="product.php" class="nav-link text-dark">SHOP</a>
            </li>
            <li class="btn btn-white btn-outline-dark px-3 mx-1 py-4">
                <a href="cart.php" class="nav-link  text-dark">CART</a>
            </li>
            <li class="btn btn-white btn-outline-dark  mx-1 py-4" >
                <a href="about.php" class="nav-link  text-dark">ABOUT</a>
            </li>
            <li class="btn btn-white btn-outline-dark mx-1 py-4">
                <a href="contact.php" class="nav-link  text-dark">CONTACT</a>
            </li>
            </ul>
        </navbar>
        </div>
        <div class="col-9">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="card-text py-auto px-2"> 
                            <img class= "textWrap" src="assets/images/logo.png" alt="Logo" width="500px">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris metus metus, fringilla sit amet commodo ut, varius nec nisi. Cras in sagittis dui, et scelerisque nisl. Fusce at pellentesque erat. Integer luctus mauris augue, ut fringilla leo vehicula id. Fusce luctus nibh mi, vitae placerat neque luctus sit amet. Integer diam arcu, scelerisque vitae nunc eu, molestie faucibus nisi. Ut et diam ut ligula is natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc rhoncus consectetur auctor. Nullam volutpat, nulla et mattis ultricies, mi mauris pretium ante, eget condimentum augue leo sed odio. Suspendisse laoreet, dolor quis luctus elementum, lorem arcu placerat ante, in porta libero nunc at tortor.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid py-3">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Who are we?</h4>
            </div>
            <div class="card-body">
                <div class="card-text py-auto px-2">
                    <img class= "textWrap" src="assets/images/dog1.jpg" alt="Image of dog with collar on" width="200px">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris metus metus, fringilla sit amet commodo ut, varius nec nisi. Cras in sagittis dui, et scelerisque nisl. Fusce at pellentesque erat. Integer luctus mauris augue, ut fringilla leo vehicula id. Fusce luctus nibh mi, vitae placerat neque luctus sit amet. Integer diam arcu, scelerisque vitae nunc eu, molestie faucibus nisi. Ut et diam ut ligula is natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc rhoncus consectetur auctor. Nullam volutpat, nulla et mattis ultricies, mi mauris pretium ante, eget condimentum augue leo sed odio. Suspendisse laoreet, dolor quis luctus elementum, lorem arcu placerat ante, in porta libero nunc at tortor.
                </div>
                
            </div>
            </div>
        </div>
<div class="container-fluid py-3">
    <div class="row mt-5 justify-content-center">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">Our Mission? Happy Dogs!</h4>
            </div>
        </div>
    </div>
</div>
<img src="assets/images/dog2.jpg" alt="Image of dog with collar on" width="400px">
<img src="assets/images/dog4.jpg" alt="Image of dog with collar on" width="400px">


<?php include('footer.php'); ?>

</html>