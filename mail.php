<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';
require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

extract($_REQUEST);

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];



function died($error)
{
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error . "<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
}
$mail = new PHPMailer(true);

try {

    // generate OTP
    $otp = rand(100000, 999999);
    // Send OTP from mail
    $output = '';

    $output .= '<p>OTP for BGV.</p>';
    //replace the site url
    $output .= 'OTP-' . $otp . '';
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

    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($email_to);

    //   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $_SESSION['name'] =$name;
    $_SESSION['email'] =$email;
    $_SESSION['phone'] =$phone;
    $_SESSION['pass1'] =$pass1;
    $_SESSION['pass2'] =$pass2;
    $_SESSION['otp'] =$otp;

    $mail->send();
    echo "<script type='text/javascript'>alert('Thank You For Registered for BGV! Please verify your valid email.');</script>";


    echo "<script>window.location='otp.php'</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
