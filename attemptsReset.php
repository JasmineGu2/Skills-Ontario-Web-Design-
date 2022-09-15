<?php
session_start();
session_destroy();
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Attempts Reset</title>
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
<style>
        .longRow{
            height: 700px;
        }
    </style>
</head>
<body> 
    <div class="container">
        <div class="row longRow  justify-content-center align-items-center">
            <div class="col-lg-6 col-sm-8 bg-light py-5 mx-auto text-center">
            <img src="../assets/images/logo.png" alt="Kelly's Collars Logo" width= "300px" class="py-4">
                <div class="card">
                    <div class="card-header bg-light my-3">
                        <h4> Sorry you tried too many times...</h4>
                        <p>Press this button to return to the homescreen</p>
                    </div>
                </div>
                <div class="card-body">
                    <a href="../index.php" class="btn btn-primary my-2"> Return to Homescreen</a> 
                </div>
            </div>
        </div>
    </div>

</body>
</html>