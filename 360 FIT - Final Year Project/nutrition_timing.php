<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>360 Timing</title>
  <!-- fonts -->
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
   ?>

</head>

<body>

  <!-- navbar -->
  <div class="container" >

    <nav class="navbar navbar-expand-xl " style="background-color: #050E32 ;">
      <a class="navbar-brand"  href="mainpg.php">
        <img src="images/360_fit_white.svg" style="width: 8em; height: 3em; " alt="" loading="lazy">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-fluid" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
         
          <li class="nav-item">
            <a class="nav-link mr-3" style="color:#fff"  href="care.php">Care</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-3" style="color:#fff"  href="#">Gym Plan</a>
          </li>

         
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i>
            <img src="images/user.svg" style="width: 2em; height: 2em;"  alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">My Program</a>
            <a class="dropdown-item" href="#">My plan</a>
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </li>
        </ul>
   

      </div>
    </nav>

    <!-- Heading -->
<div class="container" style="color: #050E32;margin-top: 1.5em; text-shadow: 0 3px 3px rgba(0, 0, 0, 0.438)
;">
    
    <h1>360FIT</h1>
    <p>
        Making Fitness Fun and easy 
    </p>
</div>

    <div style="position: absolute;" >
      <img src="images/franchise_form_bg.png" style="width: 69.4em; height: 60em; margin-top: 1em; box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.479);  " alt="">
    </div>

  <!-- Franchise Form -->
   <div class="container" style="margin-top: 2em;" >
       <div class="row">
           <div class="col-2">
            
           </div>
           <div class="col-2" style="margin-top: 2em; ">
            <div class="card" style="width: 45rem; margin-left: 1em;">
                <div class="card-header">
                  <h2 style="text-align: center;" >Choose a Time Slot</h2>
                  
                </div>
                <ul class="list-group list-group-flush" style="padding: 2em;">    
                    <button type="submit" class="btn btn-outline-secondary" style=" margin-top: 1em; width: 20em; margin-left: 8em;" >9:00 - 10:00</button>
                    <button type="submit" class="btn btn-outline-secondary" style=" margin-top: 1em; width: 20em; margin-left: 8em;" >10:30 - 11:30</button>
                    <button type="submit" class="btn btn-outline-secondary" style="width: 20em; margin-left: 8em; margin-top: 1em; " >12:00 - 13:00</button>
                    <button type="submit" class="btn btn-outline-secondary" style="width: 20em; margin-left: 8em; margin-top: 1em; " >15:00 - 16:00</button>
                    <button type="submit" class="btn btn-outline-secondary" style="width: 20em; margin-left: 8em; margin-top: 1em; " >16:30 - 17:30</button>
                    <button type="submit" class="btn btn-outline-secondary" style="width: 20em; margin-left: 8em; margin-top: 1em; " >18:00 - 19:00</button>
                    <button type="submit" class="btn btn-outline-secondary" style="width: 20em; margin-left: 8em; margin-top: 1em; " >19:30 - 20:30</button>
                    <button type="submit" class="btn btn-outline-secondary" style="width: 20em; margin-left: 8em; margin-top: 1em; " >21:00 - 22:00</button>
                    <div class="mb-3">
                        <label  class="form-label">Phone </label>
                        <input type="tel" id="Phone" class="form-control">
                      </div>
                      <p style="color: red;" >You will recieve a OTP</p>

                    </form>
                    <form action="OTP.php">
                      <button type="submit" class="btn btn-primary" style=" margin-top: 1em; width: 20em; margin-left: 8em;" >Proceed</button>
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
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
  </div>







  <!-- javascript bootstrap -->
<?php
   include 'import/import_assets_js.php';
?>

</body>

</html>