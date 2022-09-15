<?php
    
    $notSubmitted = TRUE;
    $errors = ['name'=>'','subject'=>'','message' => '', 'email'=>''];

    if(isset($_POST['submit'])){
        htmlspecialchars($_poST['name']);
        htmlspecialchars($_poST['subject']);
        htmlspecialchars($_POST['message']);
        htmlspecialchars($_POST['email']);
        
        // Check that there is a name
        if (empty($_POST['name'])){
            $errors['name'] = 'Input name please <br> <br>';
        } 

        // Check that there is a subject
        if (empty($_POST['subject'])){
            $errors['subject'] = 'Input subject please <br><br>';
        }

        // Check that there is a message
        if (empty($_POST['message'])){
            $errors['message'] = 'Input message please <br> <br>';
        }
        if (empty($_POST['email'])){
            $errors['email'] = 'Input email please <br> ';
        } else{
            $email = $_POST['email'];
            if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Input a valid email address please';
        } 

        // If submitted check if valid submission or not
        if(array_filter($errors)){
        } else{
            $notSubmitted = FALSE;
        }      
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
    <link rel="stylesheet" href="assets/styles.css">

</head>
<body>
    <?php include('header.php'); ?>

    <div class="container-fluid py-3">
        <div class="row mt-5 justify-content-center">
            <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Contact Us</h4>
                </div>
                <div class="card-body">
                    <div class="card-text py-auto">
                        <p> We're happy to respond to any questions or concerns you may have as customer satisfaction is our priority.
                        <br> <br>Contact us by filling out our contact form or give us a call!
                 
                                </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Our Information </h4>
                    </div>
                <div class="card-body">
                    <div class="card-text py-auto">
                        <p> 
                        Our Phone Number:<br> 647-123-3456 <br> <br>
                        Our office address: <br>
                                123 Random St, #500<br>
                                Cochrane, ON<br> 
                                </p>
                    </div>
                </div>
                </div>
            </div>

        <?php if ($notSubmitted){ ?>
            <div class="col-10 my-5">
                <div class="card">
                    <div class="card-header"> 
                        <h4> Contact Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="contact.php" method="POST" novalidate>
                            <label for="name" class="py-1">Name</label>
                            <input type="text" name= "name" id="name" class="form-control" placeholder="Your Name">
                            <p class="text-danger"> <?php echo $errors['name']?></p>
                            <label for="subject"class="py">Subject</label>                                    
                            <input type="text" name= "subject" id="subject" class="form-control" placeholder="Subject of inquiry or concern">
                            <p class="text-danger"> <?php echo $errors['subject']?></p>
                            <label for="message" class="form-label py-1">Message</label>                            
                            <input type="message" class="form-control" style="height: 100px" name= "message" id="message" class="form-control" placeholder=" What would you like to tell us?">
                            <p class="text-danger"> <?php echo $errors['message']?> </p>
                            <label for="email"class="py-1">Email</label>
                            <input type="email" name= "email" id="email" class="form-control" placeholder="Your Email">
                            <p class="sm-text text-muted"> We ask for your email to contact you and will not share any of your personal information requested today </p>
                            <p class="text-danger"> <?php echo $errors['email']?></p>
                            <input type="submit" name="submit" id="submit" class="btn btn-success my-3">
                        </form>       
                    </div>
                </div>
            </div>

    <?php } else{?>
        <div class="col-10 my-5">
            <div class="card">
                <div class="card-header"> 
                    <h4> Thank you for reaching out <?php echo $_POST['name'] ?> ! </h4>
                </div>                    
                <div class="card-body">
                    <div class="card-text py-auto">
                        <p> 
                            The message we will recieve will look as follows: <br> <br>
                            <?php echo $_POST['name']. "-" . $_POST['subject'] ?> <br>
                            <?php echo $_POST['message'] ?> <br>
                            Contact Email: <?php echo $_POST['email'] ?> <br> <br>
     
                            You will recieve a response within in 2-3 business days! <br>Feel free to also give us a call at our phone number (647-123-3456) for the fastest replies. 
                             </p>
                    </div>
                </div>
            </div>
    <?php } ?>

        </div>
    </div>
     <?php include('footer.php'); ?>
    </body>
</html>