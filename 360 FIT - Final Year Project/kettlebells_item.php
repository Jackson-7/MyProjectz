<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/360_fit.png">
  <title>The 360 Kettlebells</title>
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
  <header class="container" >

 <?php include 'import/homenav.php'; ?>

 <!-- SHOP CODE -->

 <div class="container mb-5" >
    <div class="card"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="images/4kg_kettlebells.jpg" /></div>
                      <div class="tab-pane" id="pic-2"><img src="images/kettlebells_2.jpg" /></div>
                      <div class="tab-pane" id="pic-3"><img src="images/kettlebells_3.jpg" /></div>
                      <div class="tab-pane" id="pic-4"><img src="images/kettlebells_4.jpg" /></div>
                      <div class="tab-pane" id="pic-5"><img src="images/kettlebells_5.jpg" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/4kg_kettlebells.jpg" /></a></li>
                      <li><a data-target="#pic-2" data-toggle="tab"><img src="images/kettlebells_2.jpg" /></a></li>
                      <li><a data-target="#pic-3" data-toggle="tab"><img src="images/kettlebells_3.jpg" /></a></li>
                      <li><a data-target="#pic-4" data-toggle="tab"><img src="images/kettlebells_4.jpg" /></a></li>
                      <li><a data-target="#pic-5" data-toggle="tab"><img src="images/kettlebells_5.jpg" /></a></li>
                    </ul>
                    
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">Kettlebells</h3>
                   
                    <p class="product-description">Included Components: 1 pair of rubber coated Kettlebells. 5kg * 2pcs=10kg</p>
                        
                       <p class="product-description"> 
                        Performing exercises like squats, throws, arm raises, etc. with a kettle bell works on your strength and balance at the same time. Increase your body flexibility.</p>
                        <p class="product-description"> 
                          Kettle bells are substitute for dumbbells and traditional weights. Kettle bells have a strong molded construction with an ergonomically designed handle for enhanced comfort.</p>
                          
                    <h4 class="price">Current Price: <span>Rs. 5,000</span></h4>
                    <form action="" method="post">
                        <input type="text" name="name" class="form-control" value="Kettlebells" hidden>
                        <input type="text" name="price" class="form-control" value="5000" hidden>
                        <input type="text" name="image" class="form-control" value="images/4kg_kettlebells.jpg" hidden>
                        <div class="row mb-2">
                            <div class="form-check form-check-inline ml-3">
                                <input class="form-check-input" type="radio" name="size" id="inlineRadio1" value="5Kg">
                                <label class="form-check-label" for="inlineRadio1">5Kg</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="size" id="inlineRadio2" value="10Kg">
                                <label class="form-check-label" for="inlineRadio2">10Kg</label>
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


 <!-- WEIGHTS -->
<div class="row">
  <!-- Gallery item -->
  <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
    <div class="bg-white rounded shadow-sm"><img src="images/max_dumbell_set.jpg" alt="" class="card-img-top"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
      <div class="p-4"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
        <h5> <a href="#" class="text-dark">Max Dumbell Set</a></h5>
        <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
       
          <form action="dumbell_set_item.php">
              <button class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;" >View Item</button>
            </form>
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
         
          <form action="weight_plates_items.php">
              <button class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;" >View Item</button>
            </form>
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
          <form action="rubber_dumbells_item.php">
              <button class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;" >View Item</button>
            </form>
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

          <form action="kettlebells_item.php">
              <button class="btn btn-primary btn-outline-light my-2 my-sm-0 " style=" width: 8em; margin-left: 0.5em; border-radius: 1.5em;" >View Item</button>
            </form>
        </div>
      </div>
    </div>
    <div class="py-5 text-right "><a href="#" class="btn btn-dark  py-3 text-uppercase">Show me more</a></div>
  </div>
  <!-- End -->
 
 
  



    <!-- footer -->
  </div>
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








  <!-- javascript bootstrap -->
<?php
   include 'import/import_assets_js.php';
?>

</body>

</html>