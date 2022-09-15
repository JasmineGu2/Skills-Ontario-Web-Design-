<?php  
 include('connect.php');
 $sql = "DELETE FROM products WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data has been Deleted';  
 }  
 ?>
 
 