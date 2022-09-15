<?php
    //MYSQLi or PDO (Use MYSQLI)
    include('admin/connect.php');
    //Construct, make query then get stuff from query
    //Write/construct query
    $sql = 'SELECT id,name,price,image_file_name FROM products';

    //Make query and get result
    $result = mysqli_query($conn, $sql);
    
    // fetch the resulting rows as an array
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    //Close connection
    mysqli_close($conn);
    //<?php assets/$product['image_file_name'] 

    if(!isset($count));
        $count = 0;
        $newRow = TRUE;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--Favico -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_package_v0.16/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_package_v0.16/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container my-5">
        <div class="row align-items-center">
            <h1 class="text-center bg-grey blue"> OUR PREMIUM COLLARS </h1>
            <img src="assets/images/logoOnly.png" alt="Kelly's Collar's Logo" width="5px" height="10px">
        </div>
    </div>

<div class="container mb-5 blue">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
        
         <?php foreach($products as $product){
                
                if($newRow){
                    echo '<div class = "card-group">';
                    $newRow = false;
                }
                echo '<a href="item.php?id='.$product['id'].'"class="card rounded text-center mx-5 my-5 px-2 py-2 bg-dark" style="width: 20em">';
                    echo '<img class= "card-img-top my-1" src="assets/images/'.$product['image_file_name'].'" alt="'.$product['name'].'" width = "150px"> ';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title font-weight-bold text-capitalize productLinks">'.$product['name'].' <h/5>';
                        echo '<p class="card-text productLinks font-weight-italic">'.$product['price'].'$</p>';
                    echo '</div>';
                echo '</a>';


            $count += 1;
            if($count == 3){
                echo "</div>";
                $newRow = True;
                $count = 0;
            }
        }?>

         </div>
    </div>
</div>
       
    <?php include('footer.php'); ?>

</body>
</html>

