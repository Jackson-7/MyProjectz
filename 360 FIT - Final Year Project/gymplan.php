<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>360 <FIT-Care></FIT-Care></title>
  <!-- fonts -->
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
  <div class="container" >
      <?php include 'import/carenav.php'; ?>


    <!-- Heading -->
<div class="container" style="color: #050E32;margin-top: 1.5em; text-shadow: 0 3px 3px rgba(0, 0, 0, 0.411); ">
    
        <h1>360FIT</h1>
        <p>
            Making Fitness Fun and easy 
        </p>
</div>


       <!-- Nutrition and Ayurveda  -->
       <div class="container" style="position: relative;">
        <div class="row">
            <div class="col">
                <div class="carebox2">
                  <img src="images/home_wo.jpg" style="width: 31.2em; height: 17em;" alt="">
                  <div class="top-center-hwp" ><h2>Home Workout Plan</h2></div>
                    
                    
            </div>
                    
                </div>

            <div class="col">
                <div class="carebox2">
                  <img src="images/ol_personal_train.jpg" style="width: 31.4em; height: 17em;" alt="">
                  <div class="top-center-opt" ><h2>Online Personal Trainning</h2></div>
                </div>
            </div>
           
            </div>
        </div>
    </div>

    
       <!-- Nutrition and Ayurveda  -->
       <div class="container" style="position: relative;">
        <div class="row">
            <div class="col">
                <div class="carebox2">
                  <img src="images/yoga_plan.jpg" style="width: 31em; height: 17em;" alt="">
                  <div class="top-center-yp" ><h2>Yoga Plan</h2></div>
                    
            </div>
                    
                </div>

            <div class="col">
                <div class="carebox2">
                  <img src="images/zumba_plan.jpg" style="width: 31em; height: 17em;" alt="">
                  <div class="top-center-zp" ><h2>Zumba Plan</h2></div>
                </div>
            </div>
           
            </div>
        </div>
    </div>

    
       <!-- Nutrition and Ayurveda  -->
       <div class="container" style="position: relative;">
        <div class="row">
            <div class="col">
                <div class="carebox2">
                  <img src="images/calisthenics_plan.jpg" style="width: 31.4em; height: 17em;" alt="">
                  <div class="top-center-cp" ><h2>Calisthenics Plan</h2></div>
                    
            </div>
                    
                </div>

            <div class="col">
                <div class="carebox2">
                  <img src="images/weight_plan.jpg" style="width: 31em; height: 17em;" alt="">
                  <div class="top-center-wt" ><h2>Weight Trainning</h2></div>
                </div>
            </div>
           
            </div>
        </div>
    </div>
    
    <!--  -->
  <div class="container" style="position: relative;" >
  	<div class="row">
      <div class="col" >
      	  <div class="carebox3">
      	    <img src="images/appointment.jpg" style="width: 31em; height: 17em;" alt="">      	    
      	  </div> 	  
        </div>
        <div class="col">
          <div class="carebox3"style=" padding-top: 2em; padding-left: 20px; padding-right: 20px; height: 17.2em">
            <h2 style="margin-left: 3.4em;" > Get in Touch </h2>
            <p style="margin-top: 1em;">Book an appointment with the team and decide, what you would like to do.</p>
            <form action="gymplan_form.php">
                <button class="btn btn-primary btn-outline-light my-2 my-sm-0" type="submit" style=" width: 10em;margin-left: 16em;" >Book</button>
              </form>
         </div> 
    </div>
  </div>
  

     <!-- QUOTE -->
  <div class="quote" style="margin-top: 2em; " >
      <h1 style="font-size: 4.5rem; color: #050E32; text-shadow: 0 5px 5px rgba(0, 0, 0, 0.445);">THE BODY ACHIEVES</h1>
      <h2 style="font-size: 4rem; color: #050e32e7; text-shadow: 0 5px 5px rgba(0, 0, 0, 0.445);">WHAT THE MIND</h2>
      <h3 style="font-size: 3.5rem;color: #050e32d5;text-shadow: 0 5px 5px rgba(0, 0, 0, 0.445);">BELIEVES</h3>
  </div>

  <!-- Achievements -->
  <div class="container" style="margin-top: 3.5em;">
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
                    
                  </form>
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