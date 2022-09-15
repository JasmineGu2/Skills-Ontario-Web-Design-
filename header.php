<?php
    if(isset($_POST['logout'])){
        $_SESSION['loggedIn'] = FALSE;
        session_destroy();
        header("Location: ../admin/index.php");
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Header</title>
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
    <link rel="stylesheet" href="../../assets/styles.css">

</head>
<body>
<div class="container-fluid">
  <nav class="navbar navbar-expand-sm navbar-white border border-light px-4">
    <a href="homepage.php" class="navbar-brand"> 
      <img src="../assets/images/logo.png" alt="Kelly's Collars Logo" width="250px">
    </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarToggle"
        aria-controls="navbarToggle"
        aria-expanded="false"
        aria-lable= "Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggle">
        <ul class="navbar-nav ms-auto">
          <li class="btn btn-light btn-outline-dark px-3 pt-3">
            <a href="./?homepage" class="text-dark">HOMEPAGE</a>
          </li>
          <li class="btn btn-light btn-outline-dark px-3 pt-3">
            <a href="./?products" class="text-dark"> MANAGE PRODUCTS</a>
          </li>
          <li>
              <form action="<?php $_SERVER['PHP_SELF'] ?> " method= "POST">
                <input type="submit" value="logout" name="logout" class="btn btn-outline-dark py-3">      
            </form>
          </li>
        </ul>
      </div>
    </nav>
</body>
</html>