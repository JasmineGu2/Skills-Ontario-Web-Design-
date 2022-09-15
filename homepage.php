
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="./assets/bootstrap/css/bootstrap-5.0.0-beta30-dist"></script>
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
<body>
    <?php include('format/header.php'); ?>
    <div class="container-fluid py-3 bg-dark">
        <div class="row mt-5 justify-content-center">
            <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> This would be a Homepage!</h4>
            </div>
            <div class="card-body">
                <div class="card-text py-5">
                    <p> The home page is still in development. 
                    <br> Please use the menu below to go to the pages to adjust item listings</p>
                </div>      
            </div>
            </div>
        </div>
      </div>
      <div class="row mt-5 justify-content-center">
          <div class="col-3 py-3 mb-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center pt-2"> Products Listed</h4>
                </div>
            <div class="card-body px-2">
                <div class="card-text py-auto text-center">
                    <p> Check out all products currently being sold and edit, add, update or delete any products. </p>
                </div>
                <a href="productList.php" class="btn btn-success my-2"> Manage Products</a>
            </div>
            </div>
        </div>
          <div class="col-3 py-3 mb-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center pt-3"> Product Sales </h4>
                </div>
            <div class="card-body px-2">
                <div class="card-text py-auto text-center">
                    <p> Product sale tracker is in development... Once it is finished, you will be able to track your sales. </p>
                </div>
                <a href="#" class="btn btn-secondary my-2" disabled> Manage Sales</a> 
            </div>
            </div>
        </div>
    </div>
</body>
</html>
</html>

