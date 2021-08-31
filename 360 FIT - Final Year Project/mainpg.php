<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>360 FIT-Main Page</title>
  <!-- PHP CODE -->
  <?php 

  include 'import/import_assets_css.php';

  include 'database.php';

  session_start();
  if(!isset($_SESSION['email'])){
      header("location:login.php");
  }

  if(isset($_POST['logout'])){
      session_destroy();
      header("location:login.php");
  }
   ?>

</head>

<body>

  <!-- navbar -->
  <header class="container" >

      <?php include 'import/homenav.php'; ?>


    <!-- Institute -->
    <div class="jumbotron bg jumbotron-fluid " style="background-color: rgba(137, 43, 226, 0);text-shadow: 0px 5px 5px rgba(0, 0, 0, 0.26);">
        <div class="container">
          <a href="trainee_form.php"><h1 style="margin-left: 3.5em; font-size: 5rem;color:#050E32; ">Be a Trainer !</h1>
          <p style="font-size:2rem;color:#050E32; margin-left:11em">Enroll For the Program Now</p></a>
        </div>
      </div>

    <!-- Flip Image -->
      <div class="container" style="margin-bottom: 5em;" >
          <div class="row mt-5 mr-3">
              <div class="col">
              

                <div class="flip-card ml-1">
                  <div class="flip-card-inner">
                    <div class="flip-card-front ">
                      <img src="images/flipzumba.jpg" alt="Avatar" style="width:260px;height:240px;">
                    </div>
                    <a href="#">
                      <div class="flip-card-back">
                        <h1>ZUMBA</h1> 
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet tenetur ea iusto quos ipsum consequatur necessitatibus optio !
                        </p> 
                        
                      </div>
                    </a>
                  </div>
                </div>
         

              
              </div>
              <div class="col">
              


                <div class="flip-card ml-1">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="images/flipyoga.jpg" alt="Avatar" style="width:260px;height:240px;">
                    </div>
                    <a href="#">
                      <div class="flip-card-back">
                        <h1>YOGA</h1> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repudiandae doloribus sint! Officia fugiat, beatae fuga amet earum? Dolore, magnam. Libero?
                        </p> 
                        
                      </div>
                    </a>
                  </div>
                </div>

              
              </div>
              <div class="col">
             

                <div class="flip-card ml-1">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="images/flipcrossfit.jpg" alt="Avatar" style="width:260px;height:240px;">
                    </div>
                    <a href="#">
                      <div class="flip-card-back">
                        <h1 style="font-size: 2rem;" >CROSS-FIT</h1> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repudiandae doloribus sint! Officia fugiat, beatae fuga amet earum? Dolore, magnam. Libero?
                        </p> 
                        
                      </div>
                    </a>
                  </div>
                </div>

              
              </div>
              <div class="col">
              

                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="images/flipgymming.jpg" alt="Avatar" style="width:260px;height:240px;">
                    </div>
                    <a href="#">
                      <div class="flip-card-back">
                        <h1>GYMMING</h1> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa repudiandae doloribus sint! Officia fugiat, beatae fuga amet earum? Dolore, magnam. Libero?
                        </p> 
                        
                      </div>
                    </a>
                  </div>
                </div>

              
              </div>
          </div>
      </div>



      
  <!-- Franchise -->

  <a class="k" href="franchise_form.php">
    <div class="container shadw" style="position: relative;
    text-align: center;
    color: white;" >
  
      <div class="row mb-5" style="background-color: #050E32;">
  
  
        <div class="col">
          <div class="box">
          <h1 style="margin-top: 1em;" >JOIN OUR FRANCHISE</h1>
          <p>Be part of our team and grow your bussiness along with us</p>
          </div>
        </div>
  
        <div class="col">
          
            <img src="images/franchise.jpg" alt="Snow" style="width:24em; height: 15em;margin-top: 0.6em;">
          
        </div>
        
      </div>
    </div>
  </a>

  <!-- Achievements -->
  <div class="container">
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
<!--  </div>-->
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
                    
                  </form>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
  </header>





<?php include 'import/import_assets_js.php' ?>

</body>

</html>