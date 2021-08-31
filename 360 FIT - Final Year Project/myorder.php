<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/360_fit.png">
    <title>The 360 Dumbell Set</title>
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

    if(isset($_GET['cancel'])){
        $id=$_GET['cancel'];
        $pname=$_GET['pname'];
        $qty=$_GET['qty'];
        $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
        $result = mysqli_query($conn,"UPDATE `order_list` SET `status`='cancel' WHERE `id`='$id'");

        if($result){
            $to_email = $_SESSION['email'];
            $subject = "Cancel Order";
            $body = "Hi, ".$_SESSION['fname']."cancel order for product $pname of qty $qty has been received. we will proceed with cancellation soon.";
            $headers = "From: Jackson 360-fit";

            if (mail($to_email, $subject, $body, $headers)) {
                echo "<script language='javascript'>";
                echo 'alert("Cancel Successfully");';
                echo 'window.location.replace("myorder.php");';
                echo "</script>";
            } else {
                echo "<script> alert('Confirmation Email sending failed..!,well try sending again after some time.')</script>";
            }

        }else{
            echo "<script language='javascript'>";
            echo 'alert("Try Again");';
            echo 'window.location.replace("myorder.php");';
            echo "</script>";
        }

    }

    if(isset($_GET['place_order'])){
        $status = "order";

        $_SESSION['p_phone']=$_SESSION['phone'];
        $_SESSION['p_page']="order_list";
        $_SESSION['p_email']=$_SESSION['email'];
        $_SESSION['p_amount']=$_SESSION['qty_price'];
        $_SESSION['p_name']=$_SESSION['fname'];
        cartorder($status);
    }
    //
    //    if(isset($_POST['order'])){
    //        $pname=$_POST['name'];
    //        $pprise=$_POST['price'];
    //        $qty=$_POST['qty'];
    //        $size=$_POST['size'];
    //        $user=$_SESSION['fname'];
    //        $phone=$_SESSION['phone'];
    //        order($pname,$pprise,$qty,$size,$user,$phone);
    //    }
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
                <table id="table_id" class="display table-primary">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Info</th>
                        <th>Qty</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php vieworder(); ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer mt-2">
                <div class="text-right">
                    Spent Amount<h5>Rs:
                        <?php
                        $email=$_SESSION['email'];
                        $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
                        $result = mysqli_query($conn,"SELECT SUM(pro_price*qty) FROM `order_list` WHERE `filed_by` = '$email' and `status`='order'");
                        while ($row1 = mysqli_fetch_array($result)) {
                            $_SESSION['qty_price']=$row1['0'];
                            echo $_SESSION['qty_price'];
                        }
                        ?>
                </div>
            </div>
        </div>

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