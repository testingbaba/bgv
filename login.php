<?php

include('./database/conn_db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';
require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');


?>


<html>

<head>
  <meta charset="UTF-8">
  <link rel="apple-touch-icon" type="image/png"
    href="./images/icons/fv-flucent.png">
  <meta name="Flucent Technologies Pvt Ltd" content="bgv">

  <link rel="shortcut icon" type="image/x-icon"
    href="./images/icons/fv-flucent.png">

  <link rel="mask-icon" type="image/x-icon"
    href="./images/icons/fv-flucent.png"
    color="#111">
  <title>Flucent Technologies - BGV | Singup</title>
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
        <div class='welcome'>Sign Up</div>
        <form  action="mail.php" onsubmit=" return singup()" method="post">
          <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
          <div class='input-fields'>
            <input type='text' id="name" name="name" placeholder='Name' class='input-line full-width'></input>
            <input type='email' id="email" name="email" placeholder='Email' class='input-line full-width'></input>
            <input type='tel' id="phone" name="phone" placeholder='Phone Number' class='input-line full-width'></input>
            <input type="password" id="pass1" name="pass1" placeholder="Password" class='input-line full-width'>
            <input type="password" id="pass2" name="pass2" placeholder="Confirm Password" class='input-line full-width'>
          </div>
          <!-- <div class='spacing'>or continue with <span class='highlight'>Facebook</span></div> -->
          <!-- <div><button class='ghost-round full-width' id="signup" data-toggle="modal" data-target="#exampleModal">Sign up</button></div> -->
          <input type='submit' value="sign up" id="signup" class="btn btn-primary"></input>
        </form>
      </div>
    </div>
  </div>


  

  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button> -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Enter OTP:</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Password:</label>
              <input type="password" class="form-control">
              <!-- <textarea class="form-control" id="message-text" name="password"></textarea> -->
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Confirm Password:</label>
              <input type="password" class="form-control">
              <!-- <textarea class="form-control" id="message-text" name="password"></textarea> -->
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a href="form.html"><button type="button" class="btn btn-primary">Create Account</button></a>
        </div>
      </div>
    </div>
  </div>

  <script>
    function singup() {
      //Result
      var result = true;

      //Variable declaration
      var name = $("#name").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var pass1 = $("#pass1").val();
      var pass2 = $("#pass2").val();


      //Regular Expression
      var expName = /^(?:((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-.\s])){1,}(['’,\-\.]){0,1}){2,}(([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-. ]))*(([ ]+){0,1}(((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){1,})(['’\-,\.]){0,1}){2,}((([^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]'’,\-\.\s])){2,})?)*)$/;
      var expEmail = /^(?![_.-])((?![_.-][_.-])[a-zA-Z\d_.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}$/;
      var expPhone = /^[1-9]\d{9}$/;

      //Name validation
      if (name == "" || name.length < 3) {
        alert(" Please enter the valid Name");
        result = false;
        return false;
      }
      if (!isNaN(name)) {
        alert("Name should be in character");
        result = false;
        return false;
      }
      if (!expName.test(name)) {
        alert("Name should be in character");
        result = false;
        return false;
      }

      //email validation
      if (email == "" || email.length < 3) {
        alert(" Please enter the valid Email.");
        result = false;
        return false;
      }
      if (!expEmail.test(email)) {
        alert("Please enter the valid Email that contant @");
        result = false;
        return false;
      }

      //Phone validation
      if (phone == "" || phone.length < 10) {
        alert(" Please enter the valid Phone Number that contant 10 digits.");
        result = false;
        return false;
      }
      if (!expPhone.test(phone)) {
        alert("Please enter the valid Phone.");
        result = false;
        return false;
      }

      // password and confirm password will be same
      if (pass1 == "") {
        alert("Please enter your password.");
        result = false;
        return false;
      }
      if (pass2 == "") {
        alert("Please enter your confirm password.");
        result = false;
        return false;
      }
      if (pass1 != pass2) {
        alert("Please password and confirm password will be same");
        result = false;
        return false;
      }

      // if (result) {
      //   var userid = email;

      //   // AJAX request
      //   $.ajax({
      //     url: 'otp.php',
      //     type: 'post',
      //     data: {
      //       userid: userid
      //     },
      //     // success: function(response) {
      //     //   // Add response in Modal body
      //     //   $('.user_photo_main').html(response);

      //     //   // Display Modal
      //     //   $('#user_photo').modal('show');
      //     // }
      //   });
      // }
    }
  </script>

</body>

</html>