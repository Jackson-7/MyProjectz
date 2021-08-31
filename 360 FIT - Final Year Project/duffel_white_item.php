<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>The 360 Duffel</title>
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
  if(isset($_POST['order'])){
    $pname=$_POST['name'];
    $pprise=$_POST['price'];
    $image=$_POST['image'];
    $qty=$_POST['qty'];
    $size=$_POST['size'];
    $user=$_SESSION['fname'];
    $phone=$_SESSION['phone'];
    order($pname,$pprise,$qty,$size,$image,$user,$phone);
}
   ?>

</head>

<body>

  <!-- navbar -->
  <div class="container" >

 <?php include 'import/homenav.php'; ?>

 <!-- SHOP CODE -->

 <div class="container mb-5" >
    <div class="card"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="images/duffel_white.jpg" /></div>
                      <div class="tab-pane" id="pic-2"><img src="images/duffel_white_2.jpg" /></div>
                      <div class="tab-pane" id="pic-3"><img src="images/duffel_white_3.jpg" /></div>
                      <div class="tab-pane" id="pic-4"><img src="images/duffel_white_4.jpg" /></div>
                      <div class="tab-pane" id="pic-5"><img src="images/duffel_white_5.jpg" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/duffel_white.jpg" /></a></li>
                      <li><a data-target="#pic-2" data-toggle="tab"><img src="images/duffel_white_2.jpg" /></a></li>
                      <li><a data-target="#pic-3" data-toggle="tab"><img src="images/duffel_white_3.jpg" /></a></li>
                      <li><a data-target="#pic-4" data-toggle="tab"><img src="images/duffel_white_4.jpg" /></a></li>
                      <li><a data-target="#pic-5" data-toggle="tab"><img src="images/duffel_white_5.jpg" /></a></li>
                    </ul>
                    
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">Duffel Bag</h3>
                 
                    <p class="product-description">Everyday Use</p>
                        
                       <p class="product-description"> 
                        </p>
                        Casual Wear</p>
                        <p class="product-description"> 
                            Travel Wear</p>
                            <p class="product-description"> 100% Polyester</p>
                            <p class="product-description">
                                3 compartments</p>
                            <p class="product-description">
                                Vents for breathability</p>
                            <p class="product-description">Separate compartment for used gear</p>
                            <p class="product-description">Pill resistant material to avoid fabric lintballs</p>
                    <h4 class="price">Current Price: <span>Rs. 2,000</span></h4>
                    <form action="" method="post">
                        <input type="text" name="name" class="form-control" value="Duffel Bag" hidden>
                        <input type="text" name="price" class="form-control" value="2000" hidden>
                        <input type="text" name="image" class="form-control" value="images/duffel_white.jpg" hidden>
                        <div class="row mb-2">
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="size" id="inlineRadio1" value="5Kg">
                                <label class="form-check-label" for="inlineRadio1">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="10Kg">
                                <label class="form-check-label" for="inlineRadio2">L</label>
                            </div>
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2"><h5>Qty</h5></label>
                            <input type="number" name="qty" class="form-control" id="inputPassword2" placeholder="1">
                        </div>
                        <div class="action">
                            <button class="add-to-cart btn btn-primary" name="order">Add to cart</button>
                        </div>
                    </form>
                </div>
            </div>
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