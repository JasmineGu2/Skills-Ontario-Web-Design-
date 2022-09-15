<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Product List</title>
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
        <div class="row justify-content-center align-items-center">
            <div class="col-8 ">
                <h3 class="py-1 text-center bg-light">Product Data Chart</h3>
            </div>
            <div class="col-1">
                <a href="productEdit.php" class="btn btn-success mb-2 px-1"> Edit Table </a>
            </div>
                
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-9 border border-outline-black bg-light">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image_File_Name</th>
                        </tr>
                     </thead>
                <tbody>
                        <?php 
                                include('connect.php');
                                //Make sql
                                $sql = "SELECT * FROM products";
        
                                // GEt query result
                                $result = mysqli_query($conn,$sql);
        
                                if ($result){
                                    while($row = mysqli_fetch_assoc($result)){ 
                                        echo '<tr id="'.$row['id'].'">
                                            <td scope="row">'.$row['id'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['price'].'</td>
                                            <td>'.$row['description'].'</td>
                                            <td>'.$row['image_file_name'].'</td>
                                        </tr>';}
                                    }
                                    mysqli_free_result($result);
                                    mysqli_close($conn); 

                                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>