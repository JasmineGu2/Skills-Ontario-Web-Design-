<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Edit Items</title>
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
     <?php include('format/header.php') ?>

    <div class="container-fluid py-3 bg-dark border border-outline-white">
          <div class="row justify-content-center align-items-center">
               <div class="col-7 text-center">
                    <h4 class= "bg-light pl-1">Product Data Chart (Click any cell to directly edit) </h4>
               </div>
               <div class="col-4">
                    <a href="productList.php" class="btn btn-success mb-2 px-5 mx-4"> Stop Editing Table </a>
            </div>
          </div>
          <div class="row justify-content-center align-items-center">
               <div class="col-11 bg-white border border-outline-black text-white">
                    <div id="liveData"> </div>
               </div>

</body>
</html>

<script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
          $.ajax({  
               url:"productTable/select.php",  
               method:"POST",  
               success:function(response){  
                     // Puts the livedata into here
                     $('#liveData').html(response);  
                }  
           });  
      }
      // Creates the initial chart
     fetch_data();
     $(document).on('click', '#add', function(){  
           var name= $('#name').text();  
           var price = $('#price').text();  
           // Do integer if possible
           var description = $('#description').text();  
           var image_file_name= $('#image_file_name').text();  
           
           if(name == '')
          { 
               alert("Item needs a name");  
               return false; 
          }

           if(price=='')
           {  
                alert("Enter Product Price");  
                return false;  
           }  
           if(description == '')  
           {  
                alert("Item needs a description!");  
                return false;  
           }  
           if(image_file_name == '')  
           {  
               alert("Enter Product Image File Name. Make sure they are in the same folder!");  
               return false;  
           }

           $.ajax({  
               url:"productTable/add.php",  
                method:"POST",  
                data:{name: name, price: price, description: description, image_file_name: image_file_name},
                complete:function(response)  
                {  
                     fetch_data();
                },
           })  
      });
      function edit(id, text, column_name)  
      {  
           $.ajax({  
                url:"productTable/edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
           });  
      }  
      $(document).on('blur', '.name', function(){  
           var id = $(this).data("id1");  
           var name = $(this).text();  
           edit(id, name, "name");  
      });  
      $(document).on('blur', '.price', function(){  
           var id = $(this).data("id2");  
           var price = $(this).text();  
           edit(id, price, "price");  
      });  
      $(document).on('blur', '.description', function(){  
           var id = $(this).data("id3");  
           var description = $(this).text();  
           edit(id, description, "description");  
      });  
      $(document).on('blur', '.image_file_name', function(){  
           var id = $(this).data("id4");  
           var price = $(this).text();  
           edit(id, image_file_name, "image_file_name");  
      });
      $(document).on('click', '.delete', function(){  
           var id=$(this).data("id5");  
           if(confirm("Are you sure you want to permanantly delete this?"))  
           {  
                $.ajax({  
                     url:"productTable/delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     },error: function(){
                          alert("error");
                     }
                });  
           }  
      });       
 });
 </script>
