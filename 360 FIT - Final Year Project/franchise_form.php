<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>360 Franchise-Form</title>
  <!-- PHP CODE -->
  <?php

  include 'import/import_assets_css.php';
  include 'database.php';

  session_start();
  if(!isset($_SESSION['email'])){
      header("location:login.php");
  }
  if(isset($_SESSION['role'])){
      if ($_SESSION["role"]=="admin"){
          header("location:admin.php");
      }
  }
  if(isset($_POST['logout'])){
      session_destroy();
      header("location:login.php");
  }
if(isset($_POST['franchise_submit']))
{
    $email=$_POST['email'];
    $full_name=$_POST['full_name'];
    $c_name=$_POST['c_name'];
    $c_website=$_POST['c_website'];
    $net_worth=$_POST['net_worth'];
    $investment=$_POST['investment'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];

    $full_name_error = null;
    $country_error = null;
    $phone_error = null;

    // VALIDATION 

    if (!preg_match("/^[a-zA-Z]+$/",$country))
    {
      $country_error = "Country should only contain alphabets and spaces";
    }

    if (!preg_match('/^[0-9]*$/', $phone))
    {
      $phone_error = "Phone Number must only contain numbers";
    }
    elseif ($full_name_error == null) 
    {
      if($country_error == null)
      {
        if($phone_error == null)
        {
          franchise_submit($email,$full_name,$c_name,$c_website,$net_worth,$investment,$country,$state,$city,$phone);   
        }
      }
    }
}


 ?>

</head>

<body>

  <!-- navbar -->
  <div class="container" >

      <?php include 'import/homenav.php'; ?>

    <div style="position: absolute;" >
      <img src="images/franchise_form_bg.png" style="width: 69.4em; height: 91em; margin-top: 2em; box-shadow: 0px 8px 8px 0 rgba(0, 0, 0, 0.459);  " alt="">
    </div>

  <!-- Franchise Form -->
   <div class="container" style="margin-top: 2em;" >
       <div class="row">
           <div class="col-2">
            
           </div>
           <div class="col-2" style="margin-top: 2em; ">
            <div class="card" style="width: 45rem; margin-left: 1em; background:
rgba( 255, 255, 255, 0.25 );
box-shadow:
0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter:
blur( 11.0px );
-webkit-backdrop-filter:
blur( 11.0px );
border-radius:
10px;">
                <div class="card-header" style="color:white;">
                  <h2>Tell Us More !!!</h2>
                  <p>We are eager to hear more about you and your vision for starting a profitable bussiness that will make an impact in your area. Whether your dream for a bussiness is large or small; budget, mid-tier or premium – we have the answers. So we can work closely together help you succeed, tell us more, we will get back to you to coordinate a discovery call.</p>
                </div>
                <ul class="list-group list-group-flush" style="padding: 2em;">
                  <form action="" method="post">
                    <div class="mb-3">
                      <label class="form-label" style="color:white;">Email address</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="form-text" style="color:white;">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                      <label  class="form-label" style="color:white;">Full Name </label>
                      <input type="text" id="fullname" name="full_name" class="form-control" required>
                      <span class="text-danger" > <?php if(isset($full_name_error)) echo $full_name_error; ?> </span>
                    </div>

                    <div class="mb-3">
                        <label  class="form-label" style="color:white;">Company Name </label>
                        <input type="text" id="cname" name="c_name" class="form-control" required>
                      </div>

                      <div class="mb-3">
                        <label  class="form-label" style="color:white;">Company Website </label>
                        <input type="text" id="cwebsite" name="c_website" class="form-control" required>
                      </div>

                      <div class="mb-3">
                        <label  class="form-label" style="color:white;">Net-Worth </label>
                        <input type="text" id="net_worth" name="net_worth" class="form-control" required>
                      </div>
                       
                      <label  class="form-label" style="color:white;">Cash available for investment </label>

                      <div class="input-group  mb-3">
                        <select class="form-select form-control" name="investment" id="inputGroupSelect02" >
                          <option value="40 Lakhs - 60 Lakhs">40 Lakhs - 60 Lakhs</option>
                          <option value="60 Lakhs - 80 Lakhs">60 Lakhs - 80 Lakhs</option>
                          <option value="80 Lakhs - 1 Crore">80 Lakhs - 1 Crore</option>
                          <option value="1 Crore - 1.2 Crore">1 Crore - 1.2 Crore</option>
                          <option value="Above 1 Crore">Above 1 Crore</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Financing is available</label>
                      </div>

                      <label  class="form-label" style="color:white;"> <h4>Location of Interest</h4>  </label>

                      <div class="mb-3">
                        <label  class="form-label" style="color:white;">Country </label>
                        <input type="text" id="country" name="country" class="form-control" required>
                        <span class="text-danger" > <?php if(isset($country_error)) echo $country_error; ?> </span>
                      </div>

                      <div class="mb-3">
                        <label  class="form-label" style="color:white;">State </label>
                        <input type="text" id="state" name="state" class="form-control" required>
                      </div>

                      <div class="mb-3">
                        <label  class="form-label" style="color:white;">City </label>
                        <input type="text" id="City" name="city" class="form-control" required>
                      </div>

                      <div class="mb-3">
                        <label  class="form-label" style="color:white;">Phone </label>
                        <input type="tel" id="Phone" name="phone" class="form-control" required>
                        <span class="text-danger" > <?php if(isset($phone_error)) echo $phone_error; ?> </span>
                      </div>
                    
                    <button type="submit" class="btn btn-primary" name="franchise_submit" style="width: 20em; margin-left: 7.8em;" >Submit</button>
                  </form>
                </ul>
              </div>
           </div>
           <div class="col-2">
            
           </div>
       </div>
   </div>

  <!-- Achievements -->
  <div class="container" style="margin-top: 5em;">
    <div class="row">
      <div class="col">
        <div class="box2 mb-5" >
          <img  src="images/award.svg" alt="">
          <h5 style="margin-left: 3.5em;" >AWARD</h5>
          <p style="font-family: 'Raleway', sans-serif;
          font-weight: 500;" >Endorsed by top celebrities and international athletes alike, Nitrro has won many awards for a best fitness center in India.</p>
          
        </div>
      </div>

      <div class="col">
        <div class="box2 mb-5" >
          <img src="images/equip.svg" alt="">
          <h5 style="margin-left: 1em;" >LATEST EQUIPMENT</h5>
          <p style="font-family: 'Raleway', sans-serif;
          font-weight: 500;">The same variety of equipment used by the likes of the American Military, and the Manchester United & German football team.</p>
        </div>
      </div>

      <div class="col">
        <div class="box2 mb-5" >
          <img src="images/gym_arch.svg" alt="">
          <h5 style="margin-left: 2em;" >ARCHITECTURE</h5>
          <p style="font-family: 'Raleway', sans-serif;
          font-weight: 500;">Standards, look and feel periodically refined to live upto brand’s promise of delivering ultimate luxurious fitness experience.</p>
        </div>
      </div>

      <div class="col">
        <div class="box2 mb-5" >
          <img src="images/certificated_trainer.svg" alt="">
          <h5 style="margin-left: 0.7em;" >CERTIFIED TRAINERS</h5>
          <p style="font-family: 'Raleway', sans-serif;
          font-weight: 500;">Provide personalized experience and create a strong sense of belongingness to our guests.</p>
        </div>
      </div>
    </div>
  </div>
 
  



    <!-- footer -->

  <div class="container footerbg" style="max-width: 1118px; margin-left: 10px; box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div class="container">
    <div class="row">
    <div class="col">
    <div class="footleft">
    <h2>Latest News</h2>
            <a style="color: #fff;" href="https://www.hindustantimes.com/" target="_blank">360 fit to open soon!!</a>

            <a style="color: #fff;" href="https://www.hindustantimes.com/" target="_blank">Olympiad 2021 to be held in India</a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>

          </div>
        </div>
        <div class="col">
          <div class="footright">
            <h2>News Letter</h2>
            <p>Sign-up for our mailing list</p>

            <form>
              <div class="cont">
                <div class="col-auto">
                  <label class="sr-only" for="inlineFormInputGroup">E-mail</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="E-mail">
                  </div>
                  <form action="dumbell_set_item.php">
                    <button class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; border-radius: 1.5em;" >Submit</button>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
  </div>







  <?php
  include 'import/import_assets_js.php';
  ?>

</body>

</html>