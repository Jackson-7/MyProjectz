<?php
function login($email,$password)
{
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email' and `pass`='$password'");

    if(mysqli_num_rows($result_set)==1)
    {
        session_start();
        while($row = mysqli_fetch_array($result_set))
        {
            $_SESSION["name"] = $row[1];
            $_SESSION["email"] = $row[2];
            $_SESSION["phone"] = $row[4];
            $_SESSION["role"]= $row[5];
            $_SESSION["type"] = $row[6];
        }
        if($_SESSION["role"]=="admin"){header("location:home.php");}
        elseif($_SESSION["role"]=="Doctor"){header( "location:doctor.php");}
        elseif($_SESSION["role"]=="Ayurveda"){header("location:ayurveda.php");}
        elseif($_SESSION["role"]=="Nutrition"){header("location:nutrition.php");}
        elseif($_SESSION["role"]=="Therapist"){header("location:therapist.php");}
        elseif($_SESSION["role"]=="Trainee"){header("location:trainee.php");}
    }else {
        echo "<script> alert('Login Unsuccessful')</script>";
    }
}
function admin($name,$email,$phone,$pass,$role,$type){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result = mysqli_query($conn,"INSERT INTO `admin`(`name`, `email`, `phone`, `pass`, `role`, `type`) VALUES ('$name','$email','$phone','$pass','$role','$type')");
    if($result){
        {
            $to_email = $email;
            $subject = "Login Details to 360_fit";
            $body = "Hi, This is Jackson from 360_fit a pro fitness app login email:'.$to_email.' password:'.$pass.'";
            $headers = "From: Jackson 360-fit";

            if (mail($to_email, $subject, $body, $headers)) {
                echo "<script language='javascript'>";
                echo 'alert("New Admin Added Successfully, details will be sent to email '.$to_email.'");';
                echo 'window.location.replace("home.php");';
                echo "</script>";
            } else {
                echo "<script> alert('Email sending failed...')</script>";
            }
        }
    }else{
        echo "<script language='javascript'>";
        echo 'alert("Try Again");';
        echo 'window.location.replace("home.php");';
        echo "</script>";
    }
}
function viewadmin(){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `admin`");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
                    ?>
                        <tr>
                            <td><?php echo $row['1'];?></td>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['3'];?></td>
                            <td><?php echo $row['5'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php
        }
    }
}
function viewfranchise(){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `franchise_detail`");
    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <td><?php echo $row['2'];?></td>
                <td><?php echo $row['1'];?></td>
                <td><?php echo $row['10'];?></td>
                <td><?php echo $row['3'];?></td>
                <td><a href="<?php echo $row['4'];?>"><?php echo $row['4'];?></a></td>
                <td><?php echo $row['5'];?></td>
                <td><?php echo $row['6'];?></td>
                <td><?php echo $row['7'];?></td>
                <td><?php echo $row['8'];?></td>
                <td><?php echo $row['9'];?></td>
                <td><?php echo $row['11'];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }
    }
}
function vieworder(){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `order_list` WHERE `status`!='cart' AND `status`!='cancel'");

    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <td><img src="../<?php echo $row['5'];?>" width="100px" height="60px" alt=""></td>
                <td><?php echo $row['1'];?></td>
                <td><?php echo $row['3'];?></td>
                <td><?php echo $row['4'];?></td>
                <td><?php echo $row['3'];?></td>
                <td><?php echo $row['6'];?></td>
                <td><?php echo $row['7'];?></td>
                <td><?php echo $row['8'];?></td>
                <td><?php echo $row['9'];?></td>
                <td><?php echo $row['11'];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                            <a class="dropdown-item" href="?proceed=<?php echo $row['0'];?>">Ready to ship</a>
                            <a class="dropdown-item" href="?send=<?php echo $row['0'];?>">Order on its way</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }

    }
}
function view_cancel_order(){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `order_list` WHERE `status`='cancel'");

    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <td><img src="../<?php echo $row['5'];?>" width="100px" height="60px" alt=""></td>
                <td><?php echo $row['1'];?></td>
                <td><?php echo $row['3'];?></td>
                <td><?php echo $row['4'];?></td>
                <td><?php echo $row['3'];?></td>
                <td><?php echo $row['6'];?></td>
                <td><?php echo $row['7'];?></td>
                <td><?php echo $row['8'];?></td>
                <td><?php echo $row['9'];?></td>
                <td><?php echo $row['11'];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                            <a class="dropdown-item" href="?proceed=<?php echo $row['0'];?>">Ready to ship</a>
                            <a class="dropdown-item" href="?send=<?php echo $row['0'];?>">Order on its way</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }

    }
}
function doc_family(){
    $type=$_SESSION["type"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `doc_con` WHERE `type` = '$type' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
        <div class="card">
            <div class="card-header">
                <h3>Doctor Consultation</h3>
            </div>
            <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Doctor</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td><?php echo $row['10'];?></td>
                            <td><?php echo $row['12'];?></td>
                            <td><?php echo $row['8'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?send=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>doc_con">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>doc_con" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="id" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
    }
}
function doc_physiotherapist(){
    $type=$_SESSION["type"];

    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `doc_con` WHERE `type` = '$type' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
        <div class="card">
            <div class="card-header">
                <h3>Doctor Consultation</h3>
            </div>
            <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Doctor</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td><?php echo $row['10'];?></td>
                            <td><?php echo $row['12'];?></td>
                            <td><?php echo $row['8'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?send=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>doc_con">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>doc_con" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="name" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
    }
}
function doc_psychiatrist(){

    $type=$_SESSION["type"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `doc_con` WHERE `type` = '$type' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
        <div class="card">
            <div class="card-header">
                <h3>Doctor Consultation</h3>
            </div>
            <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Doctor</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td><?php echo $row['10'];?></td>
                            <td><?php echo $row['12'];?></td>
                            <td><?php echo $row['8'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?send=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>doc_con">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>doc_con" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="id" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
    }
}
function doc_allergist(){

    $type=$_SESSION["type"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `doc_con` WHERE `type` = '$type' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
        <div class="card">
            <div class="card-header">
                <h3>Doctor Consultation</h3>
            </div>
            <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Doctor</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td><?php echo $row['10'];?></td>
                            <td><?php echo $row['12'];?></td>
                            <td><?php echo $row['8'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?send=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>doc_con">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>doc_con" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="id" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
    }
}
function doc_dermo(){

    $type=$_SESSION["type"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `doc_con` WHERE `type` = '$type' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
        <div class="card">
            <div class="card-header">
                <h3>Doctor Consultation</h3>
            </div>
            <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Doctor</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td><?php echo $row['10'];?></td>
                            <td><?php echo $row['12'];?></td>
                            <td><?php echo $row['8'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?send=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>doc_con">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>doc_con" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="name" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
    }
}
function doc_pediatrician(){
    $type=$_SESSION["type"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `doc_con` WHERE `type` = '$type' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Doctor</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td><?php echo $row['10'];?></td>
                            <td><?php echo $row['12'];?></td>
                            <td><?php echo $row['8'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?send=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>doc_con">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>doc_con" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="id" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
        <?php
    }
}
function doc_ayur(){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `ayurveda` WHERE `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Medicine Intake</th>
                        <th>Medical History</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['5'];?></td>
                            <td><?php echo $row['3'];?></td>
                            <td><?php echo $row['4'];?></td>
                            <td><?php echo $row['9'];?></td>
                            <td><?php echo $row['11'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>ayurveda">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>ayurveda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="name" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
        <?php
    }
}
function doc_nutri(){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `nutrition` WHERE `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Body weight</th>
                        <th>Medicine Intake</th>
                        <th>Medical History</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['4'];?></td>
                            <td><?php echo $row['5'];?></td>
                            <td><?php echo $row['9'];?></td>
                            <td><?php echo $row['11'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>nutrition">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>nutrition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="id" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
        <?php
    }
}
function doc_therapy(){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `therapy` WHERE `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Symptom</th>
                        <th>Medicine Intake</th>
                        <th>Medical History</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['6'];?></td>
                            <td><?php echo $row['4'];?></td>
                            <td><?php echo $row['5'];?></td>
                            <td><?php echo $row['9'];?></td>
                            <td><?php echo $row['12'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>therapy">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>therapy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="id" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
        <?php
    }
}
function gym_trainee(){

    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `gymplan` WHERE `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
                <table id="table_id" class="display">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Plan</th>
                        <th>Schedule</th>
                        <th>Payment info</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result_set)) {
                        ?>
                        <tr>
                            <td><?php echo $row['2'];?></td>
                            <td><?php echo $row['4'];?></td>
                            <td><?php echo $row['5'];?></td>
                            <td><?php echo $row['7'];?></td>
                            <td><?php echo $row['10'];?></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                                        <a class="dropdown-item" href="?accept=<?php echo $row['0'];?>">Accept</a>
                                        <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>therapy">Send Zoom Link</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo $row['0'];?>therapy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <input type="text" name="name" value="<?php echo $row['2'];?>" hidden>
                                            <input type="text" name="email" value="<?php echo $row['1'];?>" hidden>
                                            <div class="form-group">
                                                <textarea type="text" name="message" class="form-control" placeholder="Zoom link"></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
        <?php
    }
}
function new_trainee(){
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `trainee_detail`");
    if(mysqli_num_rows($result_set)>=1) {
        ?>
        <table id="table_id" class="display">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company Name</th>
                <th>Age</th>
                <th>Batch</th>
                <th>Gym Center</th>
                <th>Applied On</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_array($result_set)) {
                ?>
                <tr>
                    <td><?php echo $row['2'];?></td>
                    <td><?php echo $row['1'];?></td>
                    <td><?php echo $row['7'];?></td>
                    <td><?php echo $row['3'];?></td>
                    <td><?php echo $row['4'];?></td>
                    <td><?php echo $row['5'];?></td>
                    <td><?php echo $row['6'];?></td>
                    <td><?php echo $row['8'];?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="?cancel=<?php echo $row['0'];?>">Cancel</a>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>therapy">Add new trainee</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <div class="modal fade" id="exampleModal<?php echo $row['0'];?>therapy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" name="email" id="inputEmail4" value="<?php echo $row['1'];?>" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Name</label>
                                            <input type="text" class="form-control" name="name" id="inputAddress" value="<?php echo $row['2'];?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" name="pass" id="inputPassword4" value="trainee<?php echo $row['7'];?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="inputAddress2" value="<?php echo $row['7'];?>" readonly>
                                    </div>
                                    </div>
                                    <input type="text" name="role" value="Trainee" hidden>
                                    <input type="text" name="type" value="Trainee" hidden>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button name="submit" type="submit" class="btn btn-primary">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    }
}