<?php
$servername = 'localhost';
$username_ = 'root';
$password_ = 'password';

    //Connectt to database
    $conn = mysqli_connect($servername,$username_, $password_,'kellyscollars');

    // Check connection
    if(!$conn){
        echo 'connection error: '. mysqli_connect_error();
    }
?>