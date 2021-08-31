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

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

    <link href="assets/demo/demo.css" rel="stylesheet" />

    <?php
    include 'db.php';
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION["role"]=="Doctor"){header( "location:doctor.php");}
        elseif($_SESSION["role"]=="Ayurveda"){header("location:ayurveda.php");}
        elseif($_SESSION["role"]=="Nutrition"){header("location:nutrition.php");}
        elseif($_SESSION["role"]=="Therapist"){header("location:therapist.php");}
        elseif($_SESSION["role"]=="Trainee"){header("location:trainee.php");}
    }
    if(isset($_POST['logout'])||isset($_GET['logout'])){
        session_destroy();
        header("location:index.php");
    }
    $pass_error = null;
    $cpass_error = null;
    if(isset($_POST['add_admin'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        $role=$_POST['role'];
        $type=$_POST['type'];
        if(strlen($pass) < 8)
        {
            $pass_error = "Password must contain atleast 8 characters";
        }
        if($pass != $cpass)
        {
            $cpass_error = "Password does not match";
        }
        if($pass_error==null){
            if($cpass_error==null){
                admin($name,$email,$phone,$pass,$role,$type);
            }
        }
    }
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
        $result = mysqli_query($conn,"DELETE FROM `admin` WHERE `id`='$id'");
        if($result){
            echo "<script language='javascript'>";
            echo 'alert("Deleted Successfully");';
            echo 'window.location.replace("home.php");';
            echo "</script>";
        }else{
            echo "<script language='javascript'>";
            echo 'alert("Try Again");';
            echo 'window.location.replace("home.php");';
            echo "</script>";
        }
    }
    ?>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="orange">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
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
                    <a href="./home.php">
                        <i class="now-ui-icons users_circle-08"></i>
                        <p>New Admin</p>
                    </a>
                </li>
                <li>
                    <a href="./franchise.php">
                        <i class="now-ui-icons education_atom"></i>
                        <p>Franchise Details</p>
                    </a>
                </li>

                <li>
                    <a href="./order.php">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>Orders</p>
                    </a>
                </li>
                <li>
                    <a href="new_trainer.php">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>New Trainer</p>
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
                    <a class="navbar-brand" href="#pablo">Admin</a>
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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Add New Admins</h5>
                        </div>
                        <div class="card-body">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="tel" name="phone" pattern="[0-9]{10}" class="form-control" placeholder="9898989898" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1 pr-1"></div>
                                        <div class="col-md-10 px-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-1 pl-1"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <lable class="<?php if($pass_error!=null){echo 'text-danger';}?>"><?php if($pass_error!=null){echo $pass_error;} else{?>Password<?php }?></lable>
                                                <input type="password" name="pass" class="form-control" placeholder="*******" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <lable class="<?php if($cpass_error!=null){echo 'text-danger';}?>"><?php if($cpass_error!=null){echo $cpass_error;} else{?>Confirm Password<?php }?></lable>
                                                <input type="password" name="cpass" class="form-control" placeholder="*******" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Role</label>
                                                <select name="role" class="custom-select form-control" required>
                                                    <option  value="Admin" selected>Admin</option>
                                                    <option value="Doctor">Doctor</option>
                                                    <option value="Ayurveda">Ayurveda</option>
                                                    <option value="Nutrition">Nutrition</option>
                                                    <option value="Therapist">Therapist</option>
                                                    <option value="Trainee">Trainee</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Type</label>
                                                <select name="type" class="custom-select form-control" required>
                                                    <option  value="Admin" selected>Admin</option>
                                                    <option value="Family Physician">Family Physician</option>
                                                    <option value="Physiotherapist">Physiotherapist</option>
                                                    <option value="Psychiatrist">Psychiatrist</option>
                                                    <option value="Allergist">Allergist</option>
                                                    <option value="Dermatologist">Dermatologist</option>
                                                    <option value="Pediatrician">Pediatrician</option>
                                                    <option value="Ayurveda">Ayurveda</option>
                                                    <option value="Nutrition">Nutrition</option>
                                                    <option value="Therapist">Therapist</option>
                                                    <option value="Trainee">Trainee</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 pr-1">
                                        </div>
                                        <div class="col-md-6 px-1">
                                            <button name="add_admin" class="btn btn-primary btn-round btn-block">Submit</button>
                                        </div>
                                        <div class="col-md-3 pl-1">
                                        </div>
                                    </div>

                                </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Admin
                        </div>
                        <div class="card-body">
                            <table id="table_id" class="display">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Type</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                viewadmin();
                                ?>
                                </tbody>
                            </table>
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