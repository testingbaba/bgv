<?php
//session_start();
include('./database/conn_db.php');

if (isset($_REQUEST['email'])) {
    session_start();
    //Get Request from the Login Page
    extract($_REQUEST);
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    //Check user is exist in the database !
    $query = "SELECT * FROM `cand_reg` WHERE cand_email='$email' AND cand_password='" . md5($pass) . "'";
    $result = mysqli_query($con, $query);
    $rows = mysqli_num_rows($result);
    $data = mysqli_fetch_assoc($result);

    //Check user is complite the registration or not!
    $query2 = "SELECT * FROM `cand_personal` WHERE cand_personal_email='$email'";
    $result_complite = mysqli_query($con, $query2);
    $rows2 = mysqli_num_rows($result_complite);

    if ($rows == 1) {

        if ($rows2 == 1) {
            header("Location: success.php");
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['cand_phone'] = $data['cand_phone'];
            // Redirect to user dashboard page
            header("Location: form.php");
        }
    } else {
        //echo 'Session is running';
        echo '<script language="javaScript">
                alert("Email Id & Password does not matched !");
                window.location.href="./signup.php";
              </script>';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" type="image/png" href="./images/icons/fv-flucent.png">
    <meta name="Flucent Technologies Pvt Ltd" content="bgv">

    <link rel="shortcut icon" type="image/x-icon" href="./images/icons/fv-flucent.png">

    <link rel="mask-icon" type="image/x-icon" href="./images/icons/fv-flucent.png" color="#111">
    <title>Flucent Technologies - BGV | Login</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body class="room-editor editor state-htmlOn-cssOn-jsOn twilight sidebar-false    logged-out layout-side layout-right">

    <div class='container1'>
        <div class='window'>
            <div class='overlay'></div>
            <div class='content'>
                <div class='welcome'>Login</div>
                <form onsubmit="return login()" method="post">
                    <!-- <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div> -->
                    <div class='input-fields'>

                        <input type='email' id="email" name="email" placeholder='Email' class='input-line full-width'></input>
                        <input type="password" id="pass" name="pass" placeholder="Password" class='input-line full-width'>
                    </div>
                    <!-- <div class='spacing'>or continue with <span class='highlight'>Facebook</span></div> -->
                    <!-- <div><button class='ghost-round full-width' id="signup" data-toggle="modal" data-target="#exampleModal">Sign up</button></div> -->
                    <input type='submit' value="Login " onclick="return login()" class="btn btn-primary"></input><br>
                    <p>You are New? <a href="signup.php" id="signup" class="btn btn-primary">Sign Up</a>
                    <p>

                </form>
            </div>
        </div>
    </div>
    <script>
        function login() {
            //Result
            var result = true;

            //Variable declaration
            var email = $("#email").val();
            var pass = $("#pass").val();



            //Regular Expression
            var expEmail = /^(?![_.-])((?![_.-][_.-])[a-zA-Z\d_.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;

            //email validation
            if (email == "" || email.length < 3) {
                alert("Please enter the valid Email.");
                result = false;
                return false;
            }
            if (!expEmail.test(email)) {
                alert("Please enter the valid Email that contant @");
                result = false;
                return false;
            }
            //Password validation
            if (pass =="" ) {
                alert(" Please enter the password.");
                result = false;
                return false;
            }
        }
    </script>
</body>

</html>