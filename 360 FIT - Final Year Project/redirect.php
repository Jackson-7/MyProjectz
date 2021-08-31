<html>
<head>
<?php
include 'import/import_assets_css.php';
?>
</head>
<body>
<div class="row">
    <div class="col"></div>
    <div class="col">
        <?php
        include 'database.php';

        session_start();
        if(isset($_GET['payment_id'])){
            $pay_id = $_GET['payment_request_id'];
            if(!isset($_SESSION['p_page'])){
                $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
                $result_set = mysqli_query($conn,"SELECT * FROM `payment_log` WHERE `pay_id`= '$pay_id'");

                if(mysqli_num_rows($result_set)==1)
                {
                    while($row = mysqli_fetch_array($result_set))
                    {
                        $_SESSION["email"] = $row[1];
                        $_SESSION["p_page"] = $row[2];
                    }
                    $email = $_SESSION["email"];
                    $result_set = mysqli_query($conn,"SELECT * FROM ssign_up WHERE email='$email'");

                    if(mysqli_num_rows($result_set)==1) {
                        while ($row = mysqli_fetch_array($result_set)) {
                            $_SESSION["fname"] = $row[1];
                            $_SESSION["email"] = $row[3];
                            $_SESSION["phone"] = $row[6];
                            $_SESSION["img"] = $row[5];
                            $_SESSION["role"] = $row[8];
                        }
                    }
                }else{ echo "error";}
            }
           $db = $_SESSION['p_page'];
//            unset($_SESSION['p_page']);
            $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
            $result = mysqli_query($conn,"SELECT * FROM `$db` WHERE `pay_id` = '$pay_id'");
            if(mysqli_num_rows($result)>=1)
            {
                $result = mysqli_query($conn,"UPDATE `$db` SET `pay_info`='successful' WHERE `pay_id` = '$pay_id'");
                unset($_SESSION['search'],$_SESSION['p_page'],$_SESSION['p_email'],$_SESSION['p_amount'],$_SESSION['p_name'],$_SESSION['s_id']);
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Payment</h3>
                    </div>
                    <div class="card-body">
                        <h5>Payment Successful</h5>
                        <a class="btn-primary btn" href="mainpg.php">Done</a>
                    </div>
                    <div class="card-footer"></div>
                </div>
                <?php
            }else{
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Payment</h3>
                    </div>
                    <div class="card-body">
                        <h5>Payment Unsuccessful</h5>
                        <a class="btn-primary btn" href="mainpg.php">Done</a>
                    </div>
                    <div class="card-footer"></div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="col"></div>
</div>
<?php
include 'import/import_assets_js.php';
?>
</body>
<script>
    $("#close1").on("click", function () {
        location.assign("http://localhost/360_fit/login.php");
    });
</script>
</html>