<?php
  $_SESSION['loggedIn'] = FALSE;
  $errors = ['username'=>' ','password'=>''];
  $error = FALSE;
  if (isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Check that there is a username
    if (empty($username)){
        $errors['username'] = 'Input username please';
        $error = TRUE;
    } 

    // Check that there is a password
    if (empty($password)){
        $errors['password'] = 'Input password please';
        $error = TRUE;
    }

    // Check that theres no errors
    if($error == FALSE){    
        // Connect to database
        include('connect.php');
    
        // Make sql
        $sql = "SELECT * FROM user_";
    
        // Get the query result
        $result = mysqli_query($conn,$sql);
        
        // fetch result in array format
        $userData = [];
        $valid = FALSE;
        
        //Check not over 5 attempts
        if($_SESSION['attempts'] == 5){
            header("Location: attemptsReset.php");
        }

        if ($result){
            while($row = mysqli_fetch_assoc($result)){
                $userData += array($row['name_'] => $row['password']);
            }
            // Check if inputted user and password is correct
            
            foreach($userData as $correctUser => $correctPassword){
                if($correctUser == $username){
                    if($correctPassword == $password){
                        $_SESSION['loggedIn'] = TRUE;
                        $_SESSION['attempts'] = 0;
                        header("Location: index.php");
                        $valid = TRUE;
                        break;
                    }
                }
            } 
            if($valid == FALSE){
                $_SESSION['attempts'] += 1;
            }
        }
        // Close connection
        mysqli_free_result($result);
        mysqli_close($conn);         
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
                    <div class="card-header bg-light"><h4> Admin Log In</h4></div>
                </div>
                <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" novalidate class="my-4">
                        <label for="username"> USERNAME </label>
                        <input type="text" class="form-control my-1" name="username" id="username" >
                        <p class="text-danger"> <?php echo '    '. $errors['username'] ?> </p>
                        <label for="password">PASSWORD: </label>
                        <input type="text" class="form-control my-1" name="password" id="password">
                        <p class="text-danger"> <?php echo '     '. $errors['password'] ?> </p>
                        <a href="../index.php" class="btn btn-block btn-secondary mt-4"> Return to Website </a>
                        <input type="submit" class= "btn btn-primary mx-1 px-5 mt-4" name="submit" value="Login">
                        <p class="text-danger my-3"> <?php 
                        if(isset($_POST['submit'])){echo 'Incorrect Password | '. 5 - $_SESSION['attempts'] . ' attempt(s) left.'; }?> 
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>