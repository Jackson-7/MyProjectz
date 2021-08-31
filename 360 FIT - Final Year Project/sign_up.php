<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/360_fit.png">
    <title>Sign_up 360 FIT Accounts</title>

    <!-- PHP CODE -->
    <?php
     include 'database.php';

    if(isset($_POST['register']))
    {
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password2=$_POST['password2'];
        $phoneno=$_POST['phoneno'];
        $address = $_POST['address'];

        $fname_error = null;
        $lname_error = null;
        $email_error = null;
        $password_error = null;
        $phoneno_error = null;
        $file_error = null;
        

        // VALIDATION 
        if (!preg_match("/^[a-zA-Z]+$/",$fname))
        {
          $fname_error = "Firstname should only contain alphabets and space";
        }

        if (!preg_match("/^[a-zA-Z]+$/",$lname))
        {
          $lname_error = "Lastname should only contain alphabets and space";
        }

        if(strlen($phoneno) < 10)
        {
          $phoneno_error = "Phone number must contain atleast 10 digits";
        }
        if (!preg_match('/^[0-9]*$/', $phoneno))
        {
          $phoneno_error = "Phone Number must only contain numbers";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
          $email_error = "Please Enter a Valid Email ID";
        }

        if(strlen($password) < 8)
        {
          $password_error = "Password must contain atleast 8 characters";
        }
        if($password != $password2)
        {
          $cpassword_error = "Password does not match";
        }


        $fileName = basename($_FILES["img"]["name"]);

			$targetFilePath = "upload/" . $fileName;

			$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

			if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif")
  				{
  					$file_error ="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  				} 
  			else
  				{
  					move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath);
  				}

  			$img = $targetFilePath;

        $conn = mysqli_connect('localhost','root','','360_fit') or die('Unable to connect');
        $valid = mysqli_query($conn,"SELECT * FROM ssign_up WHERE email='$email' or phoneno='$phoneno'");

        if(mysqli_num_rows($valid) > 0)
        {
          $row = mysqli_fetch_assoc($valid);
          if($email == $row['email'])
          {
            $email_error = "Email ID already exists";
          }
          elseif($phoneno == $row['phoneno'])
          {
            $phoneno_error = "Phone number already exists";
          }   
        }
        else if($fname_error == null)
        {
          if ($lname_error == null)
          {
            if ($email_error == null)
            {
              if ($password_error == null)
              {
                if ($phoneno_error == null)
                {
                  if ($file_error == null)
                  {
                    register($fname,$lname,$email,$password,$phoneno,$img,$address);
                    //  echo $fname,$lname,$email,$password,$phoneno,$img;
                  }
                }
              }
            }
          }
        }
    }
    ?>
    
     <!-- our css -->
     <link rel="stylesheet" href="stylef.css">
    
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    
  <div class="container contact-form" style="width: 40em; min-height: 20em;margin-left: 19em;" >
    <div class="contact-image " >
        <a href="index.php"><img src="images/360_fit.svg" alt="gym_logo"/></a>
    </div>
      <form action="" method="post" enctype="multipart/form-data">

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group ml-1">
                      <input type="text" name="fname" class="form-control" placeholder="First Name *" value="" required />
                      <span class="text-danger" > <?php if(isset($fname_error)) echo $fname_error; ?> </span>
                  </div>
                  <div class="form-group ml-1" style="width: 27em;" >
                      <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required />
                      <span class="text-danger" > <?php if(isset($email_error)) echo $email_error; ?> </span>
                      <p class="msg ml-2 " >you can use letters,numbers and periods</p>
                  </div>

                  <div class="form-group ml-1">
                      <input type="password" name="password" class="form-control" style="width: 27em;"placeholder="Password *" value="" required />
                      <span class="text-danger" > <?php if(isset($password_error)) echo $password_error; ?> </span>
                      <p class="msg ml-2 " >use 8 or more characters</p>
                  </div>

                  <div class="form-group ml-1"  >
                      <input type="password" name="password2" class="form-control" style="width: 27em;"placeholder="Confirm Password *" value="" required />
                      <span class="text-danger" > <?php if(isset($cpassword_error)) echo $cpassword_error; ?> </span>
                  </div>

                  <div class="input-group mb-3">
                      <div class="custom-file">
                          <input   type="file" name="img" class="custom-file-input" id="inputGroupFile02">
                          <label style= "width:27em; border-radius:1em;" class="custom-file-label ml-1" for="inputGroupFile02">Choose file</label>
                      </div>
                      <span class="text-danger"><?php if (isset($file_error)) echo $file_error; ?></span>
                  </div>

                  <div class="form-group ml-1" >
                      <input type="text" name="phoneno" class="form-control"  style="width: 27em;"placeholder="Your Phone Number *" value="" required />
                      <span class="text-danger" > <?php if(isset($phoneno_error)) echo $phoneno_error; ?> </span>
                  </div>
                      <div class="form-group">
                          <textarea  name="address" style="width: 27em;" class="form-control"  placeholder="Address *" value="" required></textarea>
                      </div>
                  <div class="form-group">
                      <a href="#"><input type="submit" name="register" class="btnContact"  style="width: 27em;" value="Sign-up" /></a>
                  </div>
              </div>
              <div class="col">
                  <div class="form-group">
                      <input type="text" name="lname" class="form-control"  placeholder="Last Name *" value="" required />
                      <span class="text-danger" > <?php if(isset($lname_error)) echo $lname_error; ?> </span>
                  </div>
              </div>

              <div class="form-group">
                  <p style="margin-left:13em;" >OR</p>
                  <p style="margin-left: 8.5em;" >Already have an Account?</p>
                  <a style="margin-left: 12.5em;color:#FC6717;"href="login.php">Login</a>
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