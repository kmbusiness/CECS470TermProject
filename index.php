#!/usr/local/php5/bin/php-cgi
<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <script src="https://use.fontawesome.com/1eb48d54b5.js"></script>

  </head> 
  <body>
    <?php include 'dentist-nav.php' ?>


    <div class="dentist-banner">
      <div class="dentist-signup">
        <div class="log">
          <h2>Sign Into Your <br> Account! <i class="fa fa-sign-in" aria-hidden="true"></i></h2>
          <p><i>Don't have an account?</i></p>
          <p class="allen-margin"><i class="fa fa-hand-o-down fa-2x" aria-hidden="true"></i></p>
          <p><a href="signup.php"><span class="signupbtn"><b>SIGN UP!</b></span></a></p>

        </div>
        <div class="log">
          <?php

          include 'loginform.php' ?>
        </div>

        <!-- <form action="">
          <div class="container-signup">
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <div class="clearfix">
              <button type="button" class="cancelbtn">Cancel</button>
              <button type="submit" class="signupbtn">Sign In</button>
            </div>
          </div>
        </form> -->
      </div>
      <img class="mySlides" src="images/banner1.png">
      <img class="mySlides" src="images/banner2.png">
      <img class="mySlides" src="images/banner3.png">
    </div>

    <div class="container">
      <section id="dentist-info">
        <div class="first">
          <a href="aboutJohn.php">
            <h2>ABOUT US</h2>
            <span class="fa-stack fa-4x">
              <i class="fa fa-user-md fa-stack-2x" aria-hidden="true"></i>
              <!-- <i class="fa fa-user-md fa-stack-1x"></i> -->
            </span>
          </a>

      	</div>
        <div class="second">
          <a href="learn.php">
            <h2>LEARN</h2>
            <span class="fa-stack fa-4x">
              <i class="fa fa-heartbeat fa-stack-2x" aria-hidden="true"></i>
              <!-- <i class="fa fa-heartbeat fa-stack-1x"></i> -->
            </span>
      		</a>
      	</div>
        <div class="third">
          <a href="contact.php">
            <h2>CONTACT</h2>
            <span class="fa-stack fa-4x">
              <i class="fa fa-hospital-o fa-stack-2x" aria-hidden="true"></i>
              <!-- <i class="fa fa-hospital-o fa-stack-1x"></i> -->
            </span>
      		</a>
      	</div>
      </section>
    </div>
    <br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <div class="wrapper">
      <section id="dentist-service">
        <div class="left_col">
          <div>
            <a href="procedure.php"><img src="images/services.png" height="200px" width="200px">
              <h2>SERVICES</h2>
            </a>
            <p>Learn more about what we do!</p>
            <a href="procedure.php"><i class="fa fa-arrow-circle-right fa-3x" aria-hidden="true"></i></a>
          </div>

        </div>
        <div class="right_col">
          <div>
            <a href="appointments.php"><img src="images/appointments.png" height="200" width="200">
              <h2>APPOINTMENTS</h2>
            </a>
            <p>Schedule your appointment here!</p>
            <a href="appointments.php"><i class="fa fa-arrow-circle-right fa-3x" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>
    </div>


   <?php include 'dentist-footer.php' ?>

   <script src="functions.js"></script>
  </body>
</html>
