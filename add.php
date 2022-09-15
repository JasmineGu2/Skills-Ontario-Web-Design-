<?php  
 include('connect.php');

$sql = "INSERT INTO products (name,price,description,image_file_name) VALUES ('".$_POST["name"]."','".$_POST["price"]."','".$_POST["description"]."','".$_POST["image_file_name"]."')";

if(mysqli_query($conn, $sql)){  
    echo "success";
 } else{
    echo "Failure";
 }
       
mysqli_close($conn);       
 ?> 

