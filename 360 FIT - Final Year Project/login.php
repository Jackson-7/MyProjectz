<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/360_fit.png">
    <title>Login-360 FIT Accounts</title>
        <!-- PHP CODE -->
    <?php

    include 'import/import_assets_css.php';

    include 'database.php';

     session_start();

    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        login($email,$password);
    }

    if(isset($_SESSION["email"]))
    {
      header("location:mainpg.php");
    }
    ?>
    
     <!-- our css -->
     <link rel="stylesheet" href="stylef.css">
    
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

  <div class="container contact-form" style="width: 40em; height: 35em;margin-left: 19em;" >
    <div class="contact-image">
        <a href="index.php"><img src="images/360_fit.svg" alt="rocket_contact"/></a>
    </div>
    <form action="" method="post">
        <h3>Login To Your Account </h3>
        <p style="margin-top: 0px; margin-bottom: 2em; margin-left:8em ;color: #FC6717;">Use your 360 FIT Account</p>
       <div class="row">
            <div class="col-md-6">
                <div class="form-group ml-1" style="width: 27em;" >
                    <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required />
                </div>

                <div class="form-group ml-1">
                  <input type="password" name="password" class="form-control" style="width: 27em;"placeholder="Password *" value="" required />

              </div>

              <button name="login" class="btn btn-primary" style="width: 27em; border-radius: 5em;" href="mainpg.php">Login</button>
            </div>
            <div class="form-group">
              <p style="margin-left:13em;" >OR</p>
                <p style="margin-left: 8.5em;" >Want to create an Account?</p>
              <a style="margin-left: 12.5em; color: #FC6717;"href="sign_up.php">Sign-up</a>
          </div>
      </div>
    </form>
  </div>











<?php
include 'import/import_assets_js.php';
?>
</body>
</html>