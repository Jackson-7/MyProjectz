<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

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
    <?php
    session_start();
    include 'db.php';
    if(isset($_SESSION['role'])){
        if($_SESSION["role"]=="admin"){header("location:home.php");}
        elseif($_SESSION["role"]=="Ayurveda"){header("location:ayurveda.php");}
        elseif($_SESSION["role"]=="Nutrition"){header("location:nutrition.php");}
        elseif($_SESSION["role"]=="Therapist"){header("location:therapist.php");}
        elseif($_SESSION["role"]=="Trainee"){header("location:trainee.php");}
    }
    if(isset($_POST['logout'])||isset($_GET['logout'])){
        session_destroy();
        header("location:index.php");
    }
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
        $result = mysqli_query($conn,"DELETE FROM `doc_con` WHERE `id`='$id'");
        if($result){
            echo "<script language='javascript'>";
            echo 'alert("Deleted Successfully");';
            echo 'window.location.replace("doctor.php");';
            echo "</script>";
        }else{
            echo "<script language='javascript'>";
            echo 'alert("Try Again");';
            echo 'window.location.replace("doctor.php");';
            echo "</script>";
        }
    }
    if(isset($_GET['accept'])){
        $id=$_GET['accept'];
        $status="Accepted";
        $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
        $result = mysqli_query($conn,"UPDATE `doc_con` SET `status`='$status' WHERE `id`='$id'");
        if($result){
            echo "<script language='javascript'>";
            echo 'alert("Updated Successfully");';
            echo 'window.location.replace("doctor.php");';
            echo "</script>";
        }else{
            echo "<script language='javascript'>";
            echo 'alert("Try Again");';
            echo 'window.location.replace("doctor.php");';
            echo "</script>";
        }
    }
    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $email = $_POST['email'];
        $message= $_POST['message'];
        $to_email = $email;
        $subject = "Zoom Link";
        $body = "Hi, $name this is the zoom link to your doctor appointment link: $message";
        $headers = "From: Jackson 360-fit";

        if (mail($to_email, $subject, $body, $headers)) {
            header("location:doctor.php");
        } else {
            echo "<script> alert('Zoom Link sending failed..!,well try sending again or try later.')</script>";
        }
    }

    ?>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="orange">

        <div class="logo">
            <a href="index.php" class="simple-text logo-mini">
            </a>
            <a href="index.php" class="simple-text logo-normal">
                360-FIT
            </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="./doctor.php">
                        <i class="now-ui-icons users_circle-08"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li>
                    <a href="?logout=true">
                        <i class="now-ui-icons  media-1_button-power"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo"><?php If(isset($_SESSION['type'])){ Echo $_SESSION['type'];} ?></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="now-ui-icons location_world"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <form method="post">
                                    <button name="logout"  class="dropdown-item"> Logout </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Appointments</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php
                                if($_SESSION["type"]=="Family Physician"){
                                    doc_family();
                                }
                                if($_SESSION["type"]=="Physiotherapist"){
                                    doc_physiotherapist();
                                }
                                if($_SESSION["type"]=="Psychiatrist"){
                                    doc_psychiatrist();
                                }
                                if($_SESSION["type"]=="Allergist"){
                                    doc_allergist();
                                }
                                if($_SESSION["type"]=="Dermatologist"){
                                    doc_dermo();
                                }
                                if($_SESSION["type"]=="Pediatrician"){
                                    doc_pediatrician();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
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
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
</body>

</html>