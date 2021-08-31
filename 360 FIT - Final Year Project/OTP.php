<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>OTP Confirmation</title>
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
    if(isset($_SESSION['varified']))
    {
        unset($_SESSION['varified']);
        header("location:payment.php");
    }
    ?>
    <style type="text/css">
        #otpdiv{

            display: none;
        }
        #verifyotp{

            display: none;
        }
        #resend_otp{
            display: none;
        }

        .countdown{
            display: table;
            width: 100%;
            text-align: left;
            font-size: 15px;

        }

        #resend_otp:hover{

            text-decoration:underline;


        }
    </style>
</head>

<body>

  <!-- navbar -->
  <div class="container" >

      <?php include 'import/carenav.php'; ?>


  <!-- Franchise Form -->
   <div class="container" style="margin-top: 2em;" >
       <div class="row">
           <div class="col-2">
            
           </div>
           <div class="col-2" style="margin-top: 2em; ">
            <div class="card" style="width: 45rem; margin-left: 1em;box-shadow:0 8px 8px 0 rgba(0, 0, 0, 0.521);">
                <div class="card-header" style="background-color: unset;border: unset">
                    <div class="otp_msg"></div>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="mobile">Enter Mobile Number</label>
                            <input type="text" class="form-control" id="mob"  placeholder="Enter mobile">

                        </div>
                        <div class="form-group" id="otpdiv">
                            <label for="otp verification">Enter OTP</label>
                            <input type="text" class="form-control" id="otp" placeholder="Enter OTP">
                            <br>
                            <div class="countdown"></div>
                            <a href="" id="resend_otp" type="button">Resend</a>
                        </div>

                        <button type="button" id="sendotp" class="btn btn-block btn-primary">Send OTP</button>
                        <a href="payment.php"><button type="button" id="verifyotp" class="btn btn-block btn-primary">Verify OTP</button></a>

                    </form>
                </div>
                
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">

      $(document).ready(function(){


          function validate_mobile(mob){

              var pattern =  /^[6-9]\d{9}$/;

              if (mob == '') {

                  return false;
              }else if (!pattern.test(mob)) {

                  return false;
              }else{

                  return true;
              }
          }


          //send otp function
          function send_otp(mob){

              var ch = "send_otp";

              $.ajax({

                  url: "otp_process.php",
                  method: "post",
                  data: {mob:mob,ch:ch},
                  dataType: "text",
                  success: function(data){

                      if (data == 'success') {

                          $('#otpdiv').css("display","block");
                          $('#sendotp').css("display","none");
                          $('#verifyotp').css("display","block");

                          timer();
                          $('.otp_msg').html('<h5 class="text-danger">OTP sent successfully</h5>').fadeIn();

                          window.setTimeout(function(){
                              $('.otp_msg').fadeOut();
                          },1000)


                      }else{

                          $('.otp_msg').html('<h5 class="alert text-danger">Error in sending OTP</h5>').fadeIn();

                          window.setTimeout(function(){
                              $('.otp_msg').fadeOut();
                          },1000)

                      }
                  }

              });
          }
          //end of send otp function


          //send otp function

          $('#sendotp').click(function(){

              var mob = $('#mob').val();



              if (validate_mobile(mob) == false) $('.otp_msg').html('<h5 class="text-danger" style="position:absolute">Enter Valid mobile number</h5>').fadeIn(); else 	send_otp(mob);

              window.setTimeout(function(){
                  $('.otp_msg').fadeOut();
              },1000)





          });

          //end of send otp function


          //resend otp function
          $('#resend_otp').click(function(){

              var mob = $('#mob').val();

              send_otp(mob);
              $(this).hide();
          });
          //end of resend otp function


          //verify otp function starts

          $('#verifyotp').click(function(){


              var ch = "verify_otp";
              var otp = $('#otp').val();

              $.ajax({

                  url: "otp_process.php",
                  method: "post",
                  data: {otp:otp,ch:ch},
                  dataType: "text",
                  success: function(data){

                      if (data == "success") {

                          $('.otp_msg').html('<h5 class="text-danger">OTP Verified successfully</h5>').show().fadeOut(4000);

                      }else{

                          $('.otp_msg').html('<h5 class="text-danger">Unauthorised OTP!!!</h5>').show().fadeOut(4000);
                      }
                  }
              });


          });

          //end of verify otp function


          //start of timer function

          function timer(){

              var timer2 = "00:31";
              var interval = setInterval(function() {


                  var timer = timer2.split(':');
                  //by parsing integer, I avoid all extra string processing
                  var minutes = parseInt(timer[0], 10);
                  var seconds = parseInt(timer[1], 10);
                  --seconds;
                  minutes = (seconds < 0) ? --minutes : minutes;

                  seconds = (seconds < 0) ? 59 : seconds;
                  seconds = (seconds < 10) ? '0' + seconds : seconds;
                  //minutes = (minutes < 10) ?  minutes : minutes;
                  $('.countdown').html("Resend otp in:  <b class='text-primary'>"+ minutes + ':' + seconds + " seconds </b>");
                  //if (minutes < 0) clearInterval(interval);
                  if ((seconds <= 0) && (minutes <= 0)){
                      clearInterval(interval);
                      $('.countdown').html('');
                      $('#resend_otp').css("display","block");
                  }
                  timer2 = minutes + ':' + seconds;
              }, 1000);

          }

          //end of timer


      });
  </script>

</body>

</html>