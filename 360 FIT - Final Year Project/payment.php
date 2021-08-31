<?php

session_start();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
    array("X-Api-Key:test_df7c4aaa6178a319ad3edc0abea",
        "X-Auth-Token:test_8d0538039a5998028bd60d8286a"));
$payload = Array(
    'purpose' => $_SESSION['p_page'],
    'amount' => $_SESSION['p_amount'],
    'phone' => $_SESSION['p_phone'],
    'buyer_name' => $_SESSION['p_name'],
    'redirect_url' => 'http://127.0.0.1:8080/360_fit/redirect.php',
    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => $_SESSION['p_email'],
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch);
$response=json_decode($response);

$_SESSION['TID']=$response->payment_request->id;
$pay_id = $response->payment_request->id;
$conn = mysqli_connect('localhost','root','','360_fit') or die('unable to connect');
$id=$_SESSION['s_id'];
$db = $_SESSION['p_page'];
$email=$_SESSION["email"];

$result1 = mysqli_query($conn,"INSERT INTO `payment_log`(`email`,`page`,`pay_id`) VALUES ('$email','$db','$pay_id')");

    $result = mysqli_query($conn, "UPDATE `$db` SET `pay_id`= '$pay_id' WHERE id = '$id'");
    if ($result) {
        header('location:' . $response->payment_request->longurl);
        die();
    } else {
        header('location:dr_online_form.php');
        die();
    }
die();
?>