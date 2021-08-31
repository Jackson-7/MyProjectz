<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Now UI Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <style>
        body {
            background: -webkit-linear-gradient(left, #0f2786, #050E32);
        }
    </style>
    <?php
    include 'db.php';

    // session_start();
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        login($email,$pass);
    }
    if(isset($_SESSION['role'])){
        if($_SESSION["role"]=="admin"){header("location:home.php");}
        elseif($_SESSION["role"]=="Doctor"){header( "location:doctor.php");}
        elseif($_SESSION["role"]=="Ayurveda"){header("location:ayurveda.php");}
        elseif($_SESSION["role"]=="Nutrition"){header("location:nutrition.php");}
        elseif($_SESSION["role"]=="Therapist"){header("location:therapist.php");}
        elseif($_SESSION["role"]=="Trainee"){header("location:trainee.php");}
    }
    ?>
</head>
<body class="">
<div class="container-fluid">
<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card" style="margin-top: 130px;">
            <div class="card-header text-center">
                <div class="row">
                    <div class="col-12">
                        <a href="index.php"><img src="../images/360_fit.svg" style="width: 10em;" alt="360 FIT"/></a>
                    </div>
                    <div class="col-12">
                        <h3>Admin Login</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email *" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password *" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-block btn-round">Submit</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col-12">
                        <img style="width:10em;" src="../images/admin.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
</div>
</div>
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</body>

</html>