<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>360 FIT-Admin Dashboard</title>
  <!-- fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@700&family=Raleway:wght@300;500&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Our css -->
  <link rel="stylesheet" href="style.css">
  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body>

  <!-- navbar -->
  <div class="container" >

    <nav class="navbar navbar-expand-xl " style="background-color: #050E32 ;">
      <a class="navbar-brand"  href="#">
        <img src="images/360_fit_white.svg" style="width: 8em; height: 3em; " alt="" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-fluid" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" style="color:#fff" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#fff"  href="admin_login.php">Log-out</a>
          </li>
        </ul>
      </div>
    </nav>


<!-- Body -->
     <div class="container-fluid">
         <div class="col-md-12">
             <div class="row">
                 <div class="col-md-2">
                     <!-- Side Nav -->
                     <div class="list-group" style="margin-left: -1.8em; background-color: #050E32; height: 30.3em;" >
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">Dashboard</a>
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">Trainee</a>
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">Franchise</a>
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">Doctor's Appointment</a>
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">Gym Appiontments</a>
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">360-Shop</a>
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">Shop</a>
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">Admin </a>
                         <a href="#" class="list-group-item list-group-item-action text-center " style="background-color: #050E32; color: #fff; ">Users</a>
                     </div>
                     <!-- Side Nav Ends -->
                 </div>
                 <div class="col-md-10">
                     <h3 class="mt-2">ADMIN DASHBOARD</h3>
                    <div class="col-md-12 ">
                        <div class="row">
                            <!-- Blocks Start -->
                        <div class="col-md-3 bg-danger mt-2 ml-4 " style="height: 10em;">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                 <h5 style="color: #fff; margin-top: 1.5em;">0</h5>
                                 <h5 style="color: #fff;">Total</h5>
                                 <h5 style="color: #fff;">Admin</h5>
                                </div>
                                <div class="col-md-5 mt-3 ">
                                    <a href=""><img style="width: 100%; height: 100%;" src="images/admin_dash.svg"/></a>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-3 bg-info mt-2 ml-5" style="height: 10em;">
                          <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                 <h5 style="color: #fff; margin-top: 1.5em;">0</h5>
                                 <h5 style="color: #fff;">Total</h5>
                                 <h5 style="color: #fff;">Doctors</h5>
                                </div>
                                <div class="col-md-5 mt-3 ">
                                    <a href=""><img style="width: 100%; height: 100%;" src="images/doctor_dash.svg"/></a>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-3 bg-warning mt-2 ml-5" style="height: 10em;">
                          <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                 <h5 style="color: #fff; margin-top: 1.5em;">0</h5>
                                 <h5 style="color: #fff;">Total</h5>
                                 <h5 style="color: #fff;">Users</h5>
                                </div>
                                <div class="col-md-5 mt-3 ">
                                    <a href=""><img style="width: 100%; height: 100%;" src="images/group_users.svg"/></a>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-3 bg-warning mt-5 ml-4" style="height: 10em;">
                          <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                 <h5 style="color: #fff; margin-top: 1.5em;">0</h5>
                                 <h5 style="color: #fff;">Total</h5>
                                 <h5 style="color: #fff;">Partners</h5>
                                </div>
                                <div class="col-md-5 mt-3 ">
                                    <a href=""><img style="width: 100%; height: 100%;" src="images/partners_dash.svg"/></a>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-3 bg-info mt-5 ml-5" style="height: 10em;">
                          <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                 <h5 style="color: #fff; margin-top: 1.5em;">0</h5>
                                 <h5 style="color: #fff;">Total</h5>
                                 <h5 style="color: #fff;">Trainers</h5>
                                </div>
                                <div class="col-md-5 mt-3 ">
                                    <a href=""><img style="width: 100%; height: 100%;" src="images/trainers_dash.svg"/></a>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-3 bg-danger mt-5 ml-5" style="height: 10em;">
                          <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                 <h5 style="color: #fff; margin-top: 1.5em;">0</h5>
                                 <h5 style="color: #fff;">Total</h5>
                                 <h5 style="color: #fff;">Payment</h5>
                                </div>
                                <div class="col-md-5 mt-3 ">
                                    <a href=""><img style="width: 100%; height: 100%;" src="images/payment_dash.svg"/></a>
                                </div>
                            </div>
                        </div>
                        </div>

                        

                        </div>
                    </div>
                </div>
             </div>
             
         </div>
     </div>
   


    <!-- footer -->

  <div class="container footerbg" style="max-width: 1118px; box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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

  <!-- javascript bootstrap -->
<?php
   include 'import/import_assets_js.php';
?>
    <link rel="stylesheet" href="script.js">

</body>

</html>