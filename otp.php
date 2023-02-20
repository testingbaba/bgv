<?php

include("auth_session.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';
require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');
include('./database/conn_db.php');


$name = $_SESSION["name"];
$email = $_SESSION["email"];
$phone = $_SESSION["phone"];
$pass1 = $_SESSION["pass1"];
$pass2 = $_SESSION["pass2"];
$otp = $_SESSION['otp'];
// echo "hi " . $email;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" type="image/png" href="./images/icons/fv-flucent.png">
    <meta name="Flucent Technologies Pvt Ltd" content="bgv">

    <link rel="shortcut icon" type="image/x-icon" href="./images/icons/fv-flucent.png">

    <link rel="mask-icon" type="image/x-icon" href="./images/icons/fv-flucent.png" color="#111">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flucent Technologies - BGV | Email OTP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <center>
        <div class="">
            <h1>Email Verification</h1>
            <form action="" method="post">
                <div class="form-group text-center row col-6">
                    <label for="otp" class="col-form-label">Enter OTP:</label>
                    <input type="text" id="send_otp" name="send_otp" maxlength="6" class="form-control">
                </div>
                <center>
                    <div class="row mt-3 text-center col-6 ">

                        <div class="col-3 text-center">
                            <input type="submit" name="submit_otp" value="submit" class="btn btn-primary">
                        </div><br>
                        <div class="col-3 text-center">
                            <input type="submit" name="resend_otp" value="Resend" class="btn btn-primary">
                        </div>


                    </div>

                </center>
            </form>
        </div>
    </center>
    <?php
    if (!empty($_POST["submit_otp"])) {

        extract($_REQUEST);
        $send_otp = $_POST["send_otp"];
        if ($send_otp != $otp) {
            echo "<div class='mt-3 text-danger'>Invalid OTP</div>";
        } else {
            $query = "INSERT into `cand_reg` (cand_name,cand_email,cand_phone,cand_password)
                        VALUES ('$name','$email','$phone','" . md5($pass1) . "')";
            mysqli_query($con, "DELETE FROM `email_otp` WHERE `email_id` = '$email'");
            $result = mysqli_query($con, $query);


            //Result for registration
            if ($result) {
                $_SESSION['email'] = $email;
                $_SESSION['cand_phone'] = $phone;
                echo "<script type='text/javascript'>alert('You are registered successfully.' );</script>";
                echo "<script>window.location='./form.php'</script>";
            } else {
                echo "<script type='text/javascript'>alert('Your Email or Phone number is already registered.' );</script>";
                echo "<script>window.location='./login.php'</script>";
            }
        }
    }
    if (!empty($_POST["resend_otp"])) {

        mysqli_query($con, "DELETE FROM `email_otp` WHERE `email_id` = '$email'");
        // generate OTP
        $otp1 = rand(100000, 999999);
        // Send OTP from mail
        $output = '';

        $output .= '<p>OTP for BGV.</p>';
        //replace the site url
        $output .= 'OTP-' . $otp1 . '';
        $body = $output;
        $subject = "Flucent BGV Registration";
        $email_to = $email;

        $mail = new PHPMailer();

        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'testingbaba.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ritik.jain@testingbaba.com';                     //SMTP username
        $mail->Password   = 'Jain@123';                             //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->IsHTML(true);
        $mail->From = "ritik.jain@testingbaba.com";
        $mail->FromName = "Flucent  - OTP Registration ";

        //Recipients
        // $mail->setFrom('ritik.jain@testingbaba.com', 'Ghar Joda  - Forgot Password');


        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($email_to);
        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } //if
        else {
            $_SESSION['otp'] = $otp1;
            $otp = $_SESSION['otp'];
            echo "<p class='mt-3'>Check email for OTP sending....</p>";
            //mysqli_query($con, "DELETE FROM `email_otp` WHERE `email` = '$email'");
            $otp_resend_query = "INSERT into `email_otp` (email_id,otp) VALUES ('$email','$otp')";
            $otp_resend_result = mysqli_query($con, $otp_resend_query);
            if ($otp_resend_result) {
                echo "Check email for OTP";
            } else {
                echo "<p class='text-danger mt-3'>OTP sending faild!</p>";
            }
        }
    }

    ?>



</body>

</html>