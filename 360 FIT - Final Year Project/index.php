<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>360 FIT-Home Page</title>
  <!-- fonts -->
    <?php
    include 'import/import_assets_css.php';
    ?>
</head>

<body>

  <!-- navbar -->
  <header class="container" >

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
            <a class="nav-link" style="color:#fff" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#fff"  href="Admin/index.php">Admin</a>
          </li>
        </ul>
          <a href="login.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 mr-3 ml-3">Login</a>
<!--        <form action="login.php" class="form-inline my-2 my-lg-0">-->
<!--          <button class="btn btn-primary btn-outline-light my-2 my-sm-0 mr-3 ml-3" type="submit">Login</button>-->
<!--        </form>-->
          <a href="sign_up.php" class="btn btn-primary btn-outline-light my-2 my-sm-0">Sign-up</a>
<!--        <form action="sign_up.php">-->
<!--          <button class="btn btn-primary btn-outline-light my-2 my-sm-0" type="submit">Sign-in</button>-->
<!--        </form>-->
      </div>
    </nav>



       <!-- Start your fitness -->
  <div class="container">

    <div class="jumbotron jumbotron-fluid mt-4 pt-2" style="background-color: rgba(224, 28, 28, 0); color: #050E32 ;">
      <div class="container">
        <h1 class="display-4 ml-4 dropshadow" style=" text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.26);">Start Your Fitness Journey Today</h1>
        <a href="sign_up.php" class="btn btn-primary btn-outline-dark btn-lg" style="margin-left: 58rem; box-shadow: 0 0px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Sign-up</a>
      </div>
    </div>

  </div>
 

    <!-- Image Slider -->
    <div id="carouselExampleCaptions" class="carousel slide mt-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner h-50">
        <div class="carousel-item active">
          <img src="images/slide_1.jpg" class="d-block" style="width:100em; height:40em" alt="...">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide_2.jpg" class="d-block" style="width:100em; height:40em" alt="...">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide_3.jpg" class="d-block" style=" width:100em;height:40em" alt="...">
          <div class="carousel-caption d-none d-md-block">

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


  </header>

  <!-- everything you need -->
  <div class="container">
    <div class="jumbotron mt-4" style="background-color: rgba(118, 199, 38, 0);">
      <div class="container"  style="margin-left: 7em;" >
        <h1 class="display-4 mb-5" style="margin-left: 1em;  text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.219);" >Everything You Need</h1>
            <img class="zumba" src="images/zumba.svg" alt="zumba">
            <img class="yoga" src="images/yoga.svg" alt="zumba">
            <img class="crossfit" src="images/crossfit.svg" alt="zumba">
            <img class="gymming" src="images/gymming.svg" alt="zumba">
      </div>
    </div>
  </div>




  <!-- cards -->
  <div class="card-deck mb-4" style="margin-left:6.4em;">

    <div class="card " style="max-width: 22rem; background-color: #050E32; color:#fff; box-shadow: 0 20px 25px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <img src="images/card_1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 style="color: #fff">Harsh Sharma</h2>
        <p class="card-text"  ><h2>"</h2>Some quick example text to build on the card title and make up the bulk of the card's
          content.<h2>"</h2></p>
         
      </div>
    </div>

    <div class="card " style="max-width: 22rem;background-color: #050E32; color:#fff; box-shadow: 0 20px 25px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <img src="images/card_2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 style="color: #fff">Riya Shukla</h2>
        <p class="card-text">  <h2>"</h2>Some quick example text to build on the card title and make up the bulk of the card's
          content.  <h2>"</h2></p>
      </div>
    </div>

    <div class="card " style="max-width: 22rem;background-color: #050E32; color:#fff; box-shadow: 0 20px 25px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <img src="images/card_3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h2 style="color: #fff">Elton Dsouza</h2>
        <p class="card-text"><h2>"</h2>Some quick example text to build on the card title and make up the bulk of the card's
          content.<h2>"</h2></p>
      </div>
    </div>


   
    <!-- footer -->
  </div>
  <div class="container footerbg" style="max-width: 1118px; margin-left: 7.5em; box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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



  <?php
  include 'import/import_assets_js.php';
  ?>

</body>

</html>