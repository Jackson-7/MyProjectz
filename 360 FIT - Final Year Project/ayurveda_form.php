<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>360 Ayurvedic Consultation-Form</title>
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
    if(isset($_POST['ayur_form']))
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $medic_in = $_POST['medic_in'];
        $medic_his = $_POST['medic_his'];
        $symptom = $_POST['symptoms'];
        $schedule = $_POST['schedule'];
        $_SESSION['p_phone']=$phone;
        $_SESSION['p_page']="ayurveda";
        $_SESSION['p_email']=$email;
        $_SESSION['p_amount']="300";
        $_SESSION['p_name']=$name;
        ayurveda($email,$name,$phone,$medic_in,$medic_his,$symptom,$schedule);
        // link otp timeing part then payment
    }

    ?>
</head>

<body>

  <!-- navbar -->
  <div class="container" >
      <?php include 'import/carenav.php'; ?>

    <!-- Heading -->
<div class="container" style="color: #050E32;margin-top: 1.5em; text-shadow: 0 3px 3px rgba(0, 0, 0, 0.418) ; ">
    
    <h1>360FIT</h1>
    <p>
        Making Fitness Fun and easy 
    </p>
</div>

    <div style="position: absolute;" >
      <img src="images/franchise_form_bg.png" style="width: 69.4em; height: 70.5em; margin-top: 1em; box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.486);  " alt="">
    </div>

  <!-- Franchise Form -->
   <div class="container" style="margin-top: 2em;" >
       <div class="row">
           <div class="col-2">
            
           </div>
           <div class="col-2" style="margin-top: 2em; ">
            <div class="card" style="width: 45rem; margin-left: 1em; background:rgba( 255, 255, 255, 0.25 );box-shadow:0 8px 32px 0 rgba( 31, 38, 135, 0.37 );backdrop-filter:blur( 11.0px );-webkit-backdrop-filter:blur( 11.0px );border-radius:10px; color:white;">
                <div class="card-header">
                  <h2>Book An Appointment with Ayurvedic Experts</h2>
                  <p>Consult with our doctors and specialists like Physiotherapist,   Psychiatrist and Dietician for all your medical needs and wait for no long.</p>
                </div>
                <ul class="list-group list-group-flush" style="padding: 2em;">
                    <form action="" method="post">
                        <div class="mb-3">
                          <label class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control" id="email">
                          <div class="form-text">We'll never share your email with anyone else.</div>
                        </div>
    
                        <div class="mb-3">
                          <label  class="form-label">Full Name </label>
                          <input type="text" name="name" id="fullname" class="form-control">
                        </div>
    
                        <div class="mb-3">
                            <label  class="form-label">Medical Intake </label>
                            <input type="text" name="medic_in" id="cname" class="form-control">
                          </div>
    
                          <div class="mb-3">
                            <label  class="form-label">Medical History</label>
                            <input type="text" name="medic_his" id="age" class="form-control">
                          </div>
                           
                          <div class="mb-3">
                            <label  class="form-label">Symptoms</label>
                            <input type="text" name="symptoms" id="age" class="form-control">
                          </div>
    
                          <div class="mb-3">
                            <label  class="form-label">Phone </label>
                            <input type="tel" name="phone" id="Phone" class="form-control">
                          </div>

                          <div class="mb-3">
                            <label  class="form-label">Schedule </label>
                            <input type="datetime-local" name="schedule"  id="date" class="form-control">
                          </div>

                            <button class="btn btn-primary" name="ayur_form" style="width: 20em; margin-left: 7.8em;" >Proceed</button>
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







  <?php
  include 'import/import_assets_js.php';
  ?>
</body>

</html>