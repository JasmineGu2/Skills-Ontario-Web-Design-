<?php

include('admin/connect.php');

//Check if id is in url and if it is get that info
if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn,$_GET['id']);

    //Make sql
    $sql = "SELECT * FROM products WHERE id = $id";

    // GEt query result
    $result = mysqli_query($conn,$sql);

    //Getch result in array
    $product = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Item Menu</title>
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

</head>
<body class="bg-grey">
<?php include('header.php'); ?>

<div class="container my-5">
    <div class="row my-5 align-items-center border border-dark justify-content-around">
        <div class="col-lg-5 border">
            <img src="assets/images/<?php echo $product['image_file_name']?>" alt="Product Picture" width="420px" height="270px"> 
        </div>
        <div class="col-lg-6 border border-grey">
            <p class="my-3 border border-grey px-3"> <span class="fs-1"> <?php echo $product['name']?> </span> // Premium Dog Collar </p>
            <p class="fs-6 bg-light py-1 px-3"> Description: <br> 
            <?php echo $product['description'] ?> <br>
            <span class= "smallText"> Not taking purchases atm. Sorry for the inconvience </span> <br> </p>  
            <div class="container-fluid px-3">
                <div class="row justify-content-around border">
                    <div class="col-6 my-auto">
                        <buttons class= "btn btn-lg btn-primary px-5">Add to Cart</button>
                    </div>
                    <div class="col-6 my-3 align-self-center" >
                        <p> Price : <?php echo $product['price'] .'$'?> </p> 
                        <form action="#">
                            <label for="quantity"> Quantity:  </label>
                            <input type="number" id="quantity" name="quantity" min="1" placeholder="1" class="text-center" style="width: 100px">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
<script>
