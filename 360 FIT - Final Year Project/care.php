<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
if(isset($_SESSION['role'])){
        if($_SESSION["role"]=="admin"){header("location:admin/home.php");}
        elseif($_SESSION["role"]=="Doctor"){header( "location:admin/doctor.php");}
        elseif($_SESSION["role"]=="Ayurveda"){header("location:admin/ayurveda.php");}
        elseif($_SESSION["role"]=="Nutrition"){header("location:admin/nutrition.php");}
        elseif($_SESSION["role"]=="Therapist"){header("location:admin/therapist.php");}
        elseif($_SESSION["role"]=="Trainee"){header("location:admin/trainee.php");}
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

      <?php include 'import/carenav.php'; ?>

    <!-- Heading -->
<div class="container" style="color: #050E32;margin-top: 1.5em;text-shadow: 0 3px 3px rgba(0, 0, 0, 0.438);">
    
        <h1>360FIT</h1>
        <p>
            Making Fitness Fun and easy 
        </p>
</div>

    <!-- Doctors -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="carebox1">
                <img src="images/doc_consult.jpg" style="width: 34em; height: 21.6em;" alt="">
                </div>
            </div>
            <div class="col">
                <div class="carebox1" style="padding-top: 4em;padding: 20px;">
                    <h2  > Online Doctor Consultation </h2>
                    <p style="margin-top: 1em;">Consult with our doctors and specialists like Physiotherapist,   Psychiatrist and Dietician for all your medical needs and wait for no long.</p>
                    <a href="dr_online_form.php" class="btn btn-primary btn-outline-light my-2 my-sm-0" style=" width: 10em;">Consult</a>
<!--                    <form action="dr_online_form.php">-->
<!--                        <button class="btn btn-primary btn-outline-light my-2 my-sm-0" type="submit" style=" width: 10em;" >Consult</button>-->
<!--                      </form>-->
            </div>
                    
                </div>
            </div>
        </div>
    </div>


    <!-- Therapy -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="carebox1" style="padding-top: 5em; padding-left: 20px; padding-right: 20px;">
                    <h2  > Online Therapy </h2>
                    <p style="margin-top: 1em;">Take care of your mental and emotional fitness in a safe,calm and non-judgmental environment.</p>
                    <a href="online_therapist.php" class="btn btn-primary btn-outline-light my-2 my-sm-0" style=" width: 10em;">Consult</a>
            </div>
                </div>
            <div class="col">
                <div class="carebox1">
                  <img src="images/therapy_consult.jpg" style="width: 34em; height: 21.6em; " alt="">
                </div>
            </div>
            </div>
        </div>
    </div>

       <!-- Nutrition and Ayurveda  -->
       <div class="container" style="position: relative;">
        <div class="row">
            <div class="col">
            <a style="color: #050E32;" href="nutrition_form.php">
                  <div class="carebox2">
                    <img src="images/nutrionist_consult.jpg" style="width: 30em; height: 17em;" alt="">
                    <div class="top-center-nut" ><h2 >Nutrionist Consultation</h2></div></a>
                  </div>
                </a>
            </div>

            <div class="col">
            <a style="color: #050E32;" href="ayurveda_form.php">
                <div class="carebox2">
                  <img src="images/ayurveda_consult.jpg" style="width: 32em; height: 17em;" alt="">
                  
                    <div class="top-center-ayu"><h2>Ayurveda Consultation</h2></div>   
                  </div>
                  </a>
            </div>
           
            </div>
        </div>
    </div>
    
     <!-- QUOTE -->
  <div class="quote" style="margin-top: 2em; " >
      <h1 style="font-size: 4.5rem; color: #050E32; text-shadow: 0 5px 5px rgba(0, 0, 0, 0.438);">THE BEST DOCTOR</h1>
      <h2 style="font-size: 4rem; color: #050e32e7;text-shadow: 0 5px 5px rgba(0, 0, 0, 0.438);">GIVES LEAST</h2>
      <h3 style="font-size: 3.5rem;color: #050e32d5;text-shadow: 0 5px 5px rgba(0, 0, 0, 0.438);">MEDICINE</h3>
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






  <?php
  include 'import/import_assets_js.php';
  ?>

</body>

</html>