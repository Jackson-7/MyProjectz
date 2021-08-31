<?php 

// SIGN_UP DATABASE CONNECTION
function register($fname,$lname,$email,$password,$phoneno,$img,$address)
{
   $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
   $result = mysqli_query($conn,"INSERT INTO `ssign_up`(`fname`, `lname`, `email`, `password`, `img`, `phoneno`,`address`) VALUES ('$fname','$lname','$email','$password','$img','$phoneno','$address')");
    echo  $fname,$lname,$email,$password,$phoneno,$img;
   if($result)
   {
       header("location:login.php");
   } else{
       echo "<script> alert('Registration Unsuccessful')</script>";
   }
}

// LOGIN DATABASE CONNECTION
function login($email,$password)
{

    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM ssign_up WHERE email='$email' and password='$password'");

    if(mysqli_num_rows($result_set)==1)
    {
        session_start();
        while($row = mysqli_fetch_array($result_set))
        {
            $_SESSION["fname"] = $row[1];
            $_SESSION["email"] = $row[3];
            $_SESSION["phone"] = $row[6];
            $_SESSION["img"] = $row[5];

        }
        header("location:mainpg.php");
    }else {
        echo "<script> alert('Login Unsuccessful')</script>";
    }
}

// FRANCHISE FORM DETAILS
function franchise_submit($email,$full_name,$c_name,$c_website,$net_worth,$investment,$country,$state,$city,$phone)
{
    $filed_by=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
   $result_zet = mysqli_query($conn,"INSERT INTO `franchise_detail`(`email`, `full_name`, `c_name`, `c_website`, `net_worth` , `investment` , `country`, `state`, `city`, `phone`,`filed_by`) VALUES ('$email','$full_name','$c_name','$c_website','$net_worth','$investment','$country','$state','$city','$phone','$filed_by')");

   if($result_zet)
   {
       $to_email = $email;
       $subject = "360-FIT";
       $body = "Thanks for your interest in expanding Business with us! 

       We have received your message and would like to thank you for writing to us. If we have anydoubts regarding your submission we will call you.
       
       Otherwise, we will reply by email as soon as possible and meet officially.
       
       Talk to you soon, 360-FIT";
       $headers = "From: 360-FIT";

       if (mail($to_email, $subject, $body, $headers)) {
           echo "Email successfully sent to $to_email...";
       } else {
           echo "Email sending failed...";
       }

   } else{
       echo "<script> alert('Details Not Sent')</script>";
   }
}

function trainee_form($email,$name,$cname,$age,$batch,$center,$phone){
    $filed_by=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');

    $result = mysqli_query($conn,"INSERT INTO `trainee_detail`(`email`, `full_name`, `c_name`, `age`, `pre_batch`, `center`, `phone`,`filed_by`) VALUES ('$email','$name','$cname','$age','$batch','$center','$phone','$filed_by')");
    // database with email
    if($result){
        $to_email = $email;
        $subject = "Trainee Application";
        $body = "Thanks for being awesome! 

        We have received your details and would like to thank you for writing to us. If your has to be adjusted, please use the telephone number listed below to talk to one of our staff members. 
        
        Otherwise, we will reply by email as soon as possible.
        
        Talk to you soon, 360-FIT";
        $headers = "From: 360-FIT";

        if (mail($to_email, $subject, $body, $headers)) {
            echo "<script> alert('Email successfully sent to $to_email...')</script>";
        } else {
            echo "<script> alert('Email sending failed...')</script>";
        }
    }else{
        echo "<script> alert('Details Not Sent')</script>";
    }


}

function dr_online_form($email,$name,$phone,$medic_in,$medic_his,$symptom,$type,$schedule){
    $filed_by=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');

    $result = mysqli_query($conn,"INSERT INTO `doc_con`(`email`, `full_name`, `phone`, `madic_in`, `medic_his`, `symptom`, `type`, `schedule`,`filed_by`) VALUES ('$email','$name','$phone','$medic_in','$medic_his','$symptom','$type','$schedule','$filed_by')");

    if($result){
        $_SESSION['s_id'] = $conn->insert_id;
        $to_email = $email;
        $subject = "Appointment with the Doctor";
        $body = "Dear $name, 

        Thanks for reaching out.We will look over your details and get back to you soon. We will mail you the zoom link as per the schedule, talk to us any time you like.
        
        Talk to you soon, 360-FIT.";
        $headers = "From: Jackson 360-FIT";

        if (mail($to_email, $subject, $body, $headers)) {
            header("location:OTP.php");
        } else {
            echo "<script> alert('Confirmation Email sending failed..!,well try sending again after some time.')</script>";
        }
    }else{
        echo "<script> alert('Details Not Sent')</script>";
    }

}

function therapist($email,$name,$phone,$medic_in,$medic_his,$symptom,$schedule){
    $filed_by=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');

    $result = mysqli_query($conn,"INSERT INTO `therapy`(`email`, `full_name`, `phone`, `medic_in`, `medic_his`, `synmptoms`, `schedule`,`filed_by`) VALUES ('$email','$name','$phone','$medic_in','$medic_his','$symptom','$schedule','$filed_by')");

    if($result){
        $_SESSION['s_id'] = $conn->insert_id;
        $to_email = $email;
        $subject = "Appointment with the Therapist";
        $body = "Dear $name, 

        Thanks for reaching out.We will look over your details and get back to you soon. We will mail you the zoom link as per the schedule, talk to us any time you like.
        
        Talk to you soon, 360-FIT.";
        $headers = "From: Jackson 360-FIT";

        if (mail($to_email, $subject, $body, $headers)) {
            header("location:OTP.php");
        } else {
            echo "<script> alert('Confirmation Email sending failed..!,well try sending again after some time.')</script>";
        }
    }else{
        echo "<script> alert('Details Not Sent')</script>";
    }
    // database with zoom link sent to email only if payment and otp confirmed

}

function nutriform($email,$name,$phone,$medic_in,$medic_his,$symptom,$schedule){
    $filed_by=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');

    $result = mysqli_query($conn,"INSERT INTO `nutrition`(`email`, `full_name`, `phone`, `medic_in`, `medic_his`, `body_wei`, `schedule`,`filed_by`) VALUES ('$email','$name','$phone','$medic_in','$medic_his','$symptom','$schedule','$filed_by')");

    if($result){
        $_SESSION['s_id'] = $conn->insert_id;
        $to_email = $email;
        $subject = "Appointment with the Nutritionist";
        $body = "Dear $name, 

        Thanks for reaching out.We will look over your details and get back to you soon. We will mail you the zoom link as per the schedule, talk to us any time you like.
        
        Talk to you soon, 360-FIT.";
        $headers = "From: Jackson 360-FIT";

        if (mail($to_email, $subject, $body, $headers)) {
            header("location:OTP.php");
        } else {
            echo "<script> alert('Confirmation Email sending failed..!,well try sending again after some time.')</script>";
        }
    }else{
        echo "<script> alert('Details Not Sent')</script>";
    }
    // database with zoom link sent to email only if payment and otp confirmed
}

function ayurveda($email,$name,$phone,$medic_in,$medic_his,$symptom,$schedule){
    $filed_by=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');

    $result = mysqli_query($conn,"INSERT INTO `ayurveda`(`email`, `full_name`, `madic_in`, `medic_his`, `synmptoms`, `phone`, `schedule`,`filed_by`) VALUES ('$email','$name','$medic_in','$medic_his','$symptom','$phone','$schedule','$filed_by')");

    if($result){
        $_SESSION['s_id'] = $conn->insert_id;
        $to_email = $email;
        $subject = "Appointment with the Ayurvedic Doctor";
        $body = "Dear $name, 

        Thanks for reaching out.We will look over your details and get back to you soon. We will mail you the zoom link as per the schedule, talk to us any time you like.
        
        Talk to you soon, 360-FIT.";
        $headers = "From: Jackson 360-FIT";

        if (mail($to_email, $subject, $body, $headers)) {
            header("location:OTP.php");
        } else {
            echo "<script> alert('Confirmation Email sending failed..!,well try sending again after some time.')</script>";
        }
    }else{
        echo "<script> alert('Details Not Sent')</script>";
    }
    // database with zoom link sent to email only if payment and otp confirmed
}

function gym($email,$name,$phone,$symptom,$schedule)
{
    $filed_by=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');

    $result = mysqli_query($conn,"INSERT INTO `gymplan`(`email`, `full_name`, `phone`, `paln`, `Schedule`,`filed_by`) VALUES ('$email','$name','$phone','$symptom','$schedule','$filed_by')");

    if($result){
        $_SESSION['s_id'] = $conn->insert_id;
        $to_email = $email;
        $subject = "Gym Plan";
        $body = "Dear $name,
        Thanks for filling out our form!

        We will look over your details and get back to you by tomorrow. In the meantime, you can check the 360 Shop, look over our new product collection which will gear you up for starting your gymming.
        
        Your friends at 360-FIT";
        $headers = "From: Jackson 360-FIT";

        if (mail($to_email, $subject, $body, $headers)) {
            header("location:OTP.php");
        } else {
            echo "<script> alert('Confirmation Email sending failed..!,well try sending again after some time.')</script>";
        }
    }else{
        echo "<script> alert('Details Not Sent')</script>";
    }
    // database with zoom link sent to email only if payment and otp confirmed
}

function order($pname,$pprise,$qty,$size,$image,$user,$phone){
    $filed_by=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');

    $result = mysqli_query($conn,"INSERT INTO `order_list`(`pro_name`, `pro_price`, `size`, `qty`, `image`, `c_name`, `c_phone`,`filed_by`) VALUES ('$pname','$pprise','$size','$qty','$image','$user','$phone','$filed_by')");

    if($result){
    header("location:cart.php");
    }else{
        echo "<script> alert('Try again')</script>";
    }
}

function viewcart(){
    $email=$_SESSION['email'];

    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `order_list` WHERE `filed_by` = '$email' and `status`='cart'");

    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
?>
            <tr>
                <td><img src="<?php echo $row['5'];?>" width="100px" height="60px" alt=""></td>
                <td><?php echo $row['1'];?></td>
                <td><?php echo $row['2'];?></td>
                <td><?php echo $row['3'];?></td>
                <td><?php echo $row['4'];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>">Delete</a>
                            <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>">Change Qty</a>
                        </div>
                    </div>
                </td>
            </tr>
            <div class="modal fade" id="exampleModal<?php echo $row['0'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="text" name="id" value="<?php echo $row['0'];?>" hidden>
                                <input type="text" name="db" value="order_list" hidden>
                                <div class="form-group">
                                    <lable>Qty</lable>
                                    <input type="number" name="qty" class="form-control" placeholder="<?php echo $row['4'];?>">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }

    }

}
function vieworder(){
    $email=$_SESSION['email'];

    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `order_list` WHERE `filed_by` = '$email' and `status`='order'");

    if(mysqli_num_rows($result_set)>=1) {
        while ($row = mysqli_fetch_array($result_set)) {
            ?>
            <tr>
                <td><img src="<?php echo $row['5'];?>" width="100px" height="60px" alt=""></td>
                <td><?php echo $row['1'];?></td>
                <td><?php echo $row['2'];?></td>
                <td><?php echo $row['3'];?></td>
                <td><?php echo $row['4'];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="?cancel=<?php echo $row['0'];?>&pname=<?php echo $row['1'];?>&qty=<?php echo $row['4'];?>">Cancel order</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }

    }

}
function view_cons_doc(){

$email=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `doc_con` WHERE `filed_by` = '$email' and `pay_info`='successful'");
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
                                                <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>&db=doc_con">Delete</a>
                                                <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>doc_con">Change Schedule</a>
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
                                                    <input type="text" name="id" value="<?php echo $row['0'];?>" hidden>
                                                    <input type="text" name="db" value="doc_con" hidden>
                                                    <div class="form-group">
                                                        <input type="datetime-local" name="schedule" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
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
function view_cons_ayur(){
    $email=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `ayurveda` WHERE `filed_by` = '$email' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
    ?>
        <div class="card">
            <div class="card-header">
                <h3>Ayurveda Consultation</h3>
            </div>
            <div class="card-body">
                <table id="table_id1" class="display">
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
                                    <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>&db=ayurveda">Delete</a>
                                    <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>ayurveda">Change Schedule</a>
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
                                            <input type="text" name="id" value="<?php echo $row['0'];?>" hidden>
                                            <input type="text" name="db" value="ayurveda" hidden>
                                            <div class="form-group">
                                                <input type="datetime-local" name="schedule" class="form-control">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
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
function view_cons_nutri(){
    $email=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `nutrition` WHERE `filed_by` = '$email' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
?>
    <div class="card">
        <div class="card-header">
            <h3>Nutrition Consultation</h3>
        </div>
        <div class="card-body">
            <table id="table_id2" class="display">
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
                                    <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>&db=nutrition">Delete</a>
                                    <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>nutrition">Change Schedule</a>
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
                                        <input type="text" name="id" value="<?php echo $row['0'];?>" hidden>
                                        <input type="text" name="db" value="nutrition" hidden>
                                        <div class="form-group">
                                            <input type="datetime-local" name="schedule" class="form-control">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
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
function view_cons_therapy(){
    $email=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `therapy` WHERE `filed_by` = '$email' and `pay_info`='successful'");
    if(mysqli_num_rows($result_set)>=1) {
?>
    <div class="card">
        <div class="card-header">
            <h3>Therapy Consultation</h3>
        </div>
        <div class="card-body">
            <table id="table_id3" class="display">
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
                                    <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>&db=therapy">Delete</a>
                                    <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>therapy">Change Schedule</a>
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
                                        <input type="text" name="id" value="<?php echo $row['0'];?>" hidden>
                                        <input type="text" name="db" value="therapy" hidden>
                                        <div class="form-group">
                                            <input type="datetime-local" name="schedule" class="form-control">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
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
function my_gym_plan(){

    $email=$_SESSION["email"];
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
    $result_set = mysqli_query($conn,"SELECT * FROM `gymplan` WHERE `filed_by` = '$email' and `pay_info`='successful'");
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
                                        <a class="dropdown-item" href="?delete=<?php echo $row['0'];?>&db=doc_con">Delete</a>
                                        <a class="dropdown-item" href="?id=<?php echo $row['0'];?>" data-toggle="modal" data-target="#exampleModal<?php echo $row['0'];?>doc_con">Change Schedule</a>
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
                                            <input type="text" name="id" value="<?php echo $row['0'];?>" hidden>
                                            <input type="text" name="db" value="gymplan" hidden>
                                            <div class="form-group">
                                                <input type="datetime-local" name="schedule" class="form-control">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
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
function cartorder($status){
    $filed_by=$_SESSION["email"];
    $email=$_SESSION["email"];
    $name=$_SESSION["fname"];
    $num0 = (rand(10,100));
    $num1 = date("Ymd");
    $ran_id= $num0 . $num1;
    $conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');

    $result = mysqli_query($conn,"UPDATE `order_list` SET `ran_id`='$ran_id' , `status`='$status' WHERE `filed_by`='$filed_by'");


    if(mysqli_affected_rows($conn)>=1){
        $to_email = $email;
        $subject = "Order Placed";
        $body = "Hi, $name your inform you that your order has been placed.";
        $headers = "From: Jackson 360-fit";

        if (mail($to_email, $subject, $body, $headers)) {
            header("location:OTP.php");
        } else {
            echo "<script> alert('Confirmation Email sending failed..!,well try sending again after some time.')</script>";
        }
    }else{
        echo "<script> alert('Details Not Sent')</script>";
    }
}
?>