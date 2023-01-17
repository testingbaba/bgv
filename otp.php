<?php

include("auth_session.php");
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
                    <input type="text" id="otp" maxlength="6" class="form-control">
                </div>
                <center>
                <div class="row mt-3 text-center col-6 ">
                    
                        <div class="col-3 text-center">
                            <input type="submit" value="submit" class="btn btn-primary">
                        </div><br>
                        <div class="col-3 text-center">
                            <input type="submit" value="Resend" class="btn btn-primary">
                        </div>
                    

                </div>
                
                </center>
            </form>
        </div>
    </center>



</body>

</html>