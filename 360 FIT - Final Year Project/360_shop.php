<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>The 360 Shop</title>
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

      <?php include 'import/homenav.php'; ?>


      <!-- SHOP CODE -->
 
 <div class="container-fluid">
    <div class="px-lg-5">
  
      <!-- For demo purpose -->
      <div class="row py-5">
        <div class="col-lg-12 mx-auto">
          <div class="text-white p-5 shadow-sm rounded banner" style="height: 20em;">
            <h1 class="display-4">Welcome To The 360 Shop</h1>
            <h4  class="lead">A Life Full Of Fitness And Styles</h4>
          </div>
        </div>
      </div>
      <!-- End -->
  
     <!-- WEIGHTS -->
<div class="row">
  <!-- Gallery item -->
  <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
    <div class="bg-white rounded shadow-sm"><img src="images/max_dumbell_set.jpg" alt="" class="card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
      <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
        <h5> <a href="#" class="text-dark">Max Dumbell Set</a></h5>
        <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <a href="dumbell_set_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

        </div>
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- Gallery item -->
  <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
    <div class="bg-white rounded shadow-sm"><img src="images/set3_weight_plates.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
      <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
        <h5> <a href="#" class="text-dark">Weight Plates</a></h5>
        <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <a href="weight_plates_items.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

        </div>
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- Gallery item -->
  <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
    <div class="bg-white rounded shadow-sm"><img src="images/2kg_rubber_dumbells.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
      <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
        <h5> <a href="#" class="text-dark">Rubber Dumbell</a></h5>
        <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <a href="rubber_dumbells_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

        </div>
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- Gallery item -->
  <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
    <div class="bg-white rounded shadow-sm"><img src="images/4kg_kettlebells.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
      <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
        <h5> <a href="#" class="text-dark">kettlebell</a></h5>
        <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            <a href="kettlebells_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

        </div>
      </div>
    </div>
    
  </div>
  <!-- End -->
 
  
        <!-- COMFORT CLOTHING -->
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="images/womens_comfort_pink.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
            <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
              <h5> <a href="#" class="text-dark">Women Comfort</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <a href="women_comfort_pink_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="images/boys_comfort_greysleves.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
            <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
              <h5> <a href="#" class="text-dark">Men Comfort</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <a href="men_comfort_grey_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="images/women_comfort_grey.jpg"  alt="" class="img-fluid card-img-top" style="height: 21em;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
            <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
              <h5> <a href="#" class="text-dark">Women Comfort</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <a href="women_comfort_grey_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4" >
          <div class="bg-white rounded shadow-sm"><img src="images/men_comfort_redsleeves.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
            <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
              <h5> <a href="#" class="text-dark">Men Comfort </a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <a href="men_comfort_red_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

              </div>
            </div>
          </div>
          
        </div>
        <!-- End -->
        
        <!-- BAGS -->
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="images/duffel_orange.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
            <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
              <h5> <a href="#" class="text-dark">Duffel Bag</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <a href="duffel_org_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="images/duffel_blue.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
            <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
              <h5> <a href="#" class="text-dark">Duffel Bag</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <a href="duffel_blu_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="images/duffel_white.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
            <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
              <h5> <a href="#" class="text-dark">Duffel Bag</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <a href="duffel_white_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="images/backpack_orange.jpg" alt="" class="img-fluid card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
            <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
              <h5> <a href="#" class="text-dark">Backpack</a></h5>
              <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <a href="backpack_org_item.php" class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;">View Item</a>

              </div>
            </div>
          </div>
        </div>
        <!-- End -->
  
      </div>
     
    </div>
  </div>
  


 
 
  



    <!-- footer -->

  <div class="container footerbg" style="max-width: 1118px; margin-left: 1px; box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
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

</body>

</html>