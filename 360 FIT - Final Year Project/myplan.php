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
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $db=$_POST['db'];
        $schedule=$_POST['schedule'];
        $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
        $result = mysqli_query($conn,"UPDATE `$db` SET `schedule`='$schedule' WHERE `id` = '$id'");
        if($result){
            echo "<script language='javascript'>";
            echo 'alert("Updated Successfully");';
            echo 'window.location.replace("myplan.php");';
            echo "</script>";
        }else{
            echo "<script language='javascript'>";
            echo 'alert("Try Again");';
            echo 'window.location.replace("myplan.php");';
            echo "</script>";
        }
    }
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $db=$_GET['db'];
        $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
        $result = mysqli_query($conn,"DELETE FROM `$db` WHERE `id`='$id'");
        if($result){
            echo "<script language='javascript'>";
            echo 'alert("Deleted Successfully");';
            echo 'window.location.replace("myplan.php");';
            echo "</script>";
        }else{
            echo "<script language='javascript'>";
            echo 'alert("Try Again");';
            echo 'window.location.replace("myplan.php");';
            echo "</script>";
        }
    }
    ?>

</head>

<body>

<!-- navbar -->
<header class="container" >

    <?php include 'import/homenav.php'; ?>

    <div class="container" style="margin-bottom: 5em; padding-top :15px;" >
        <?php
        view_cons_doc();
        ?>


        <?php
        view_cons_ayur();
        ?>

        <?php
        view_cons_nutri();
        ?>

        <?php
        view_cons_therapy();
        ?>
    </div>

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