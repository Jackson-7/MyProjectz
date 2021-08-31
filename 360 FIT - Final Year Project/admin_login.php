<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/360_fit.png">
    <title>Admin-Login-360 FIT </title>
    
     <!-- our css -->
     <link rel="stylesheet" href="stylef.css">
    
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>

  <div class="container contact-form" style="width: 40em; height: 31em;margin-left: 19em;" >
    <div class="contact-image">
        <a href="index.php"><img src="images/360_fit.svg" alt="360 FIT"/></a>
    </div>
    <form method="post">
        <h3 style="margin-top: -2.5em;">Admin Login</h3>
       <div class="row">
            <div class="col-md-6">
              
                <div class="form-group ml-1" style="width: 27em;" >
                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                </div>

                <div class="form-group ml-1">
                  <input type="password" name="txtName" class="form-control" style="width: 27em;"placeholder="Password *" value="" />
             
              </div>

                    <a class="btn btn-primary" style="width: 27em; border-radius: 5em;" href="admin_home.php">Login</a>

              
                <div class="row" style="margin-left: 9em;">
                  <img style="width:10em; height:10em;" src="images/admin.jpg" alt="">
                </div>

            </div>         
      </div>
    </form>
  </div>

    <!-- javascript bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
  crossorigin="anonymous"></script>
</body>
</html>