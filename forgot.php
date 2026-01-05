<?php

include_once("conection.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="style_for_s_in_s_up.css">
    <title>tour and travel agency</title>
    <style>
        .form .login-btn1 {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #eb5c14;
  /* background-image: linear-gradient(35deg,#eb5c14,#e6bf30); */
  width: 50%;
  border-radius: 10px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
        }
    </style>
    </head>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');
?>

<!-- <div class="container">
    <div class="row">
        <div class="offset-lg-3 offset-md-3 col-6">
            <h1>Forgot Password</h1>

            <br>
            <form onSubmit="return(validate_forget_password());" method="post" action="forget_password_form.php">
                <div class="row">
                    <div class="col">
                        <input type="text" name="em" placeHolder="Email" id="em1" class="form-control">
                        <p id="em_err"></p>
                    </div>
                </div>


                <div class="row" style="text-align:center;">
                    <div class="col">
                        <input type="submit" value="Send Verification Email" name="btn_forget" class="btn btn-danger">

                        <input type="reset" value="Reset" name="btn-message" class="btn btn-danger">
                    </div>
                </div>
                <br>
                <div class="row" style="text-align:center;">
                    <div class="col">
                        <p> Don't have an Account? &nbsp;&nbsp;<a href="register.php"> <input type="Button" value="Create Account" name="btn-message" class="btn btn-danger"></a></p>
                    </div>
                </div>

                <div class="row" style="text-align:center;">
                    <div class="col">
                        <p> Already have an Account?<a href="login.php"> <input type=" Button" value="Login" name="btn-message" class="btn btn-danger"></a></p>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div> -->
<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
          <h1 class="form-title">forgot password</h1>
          </div>
        </div>
        <form method="post" action="">
        <input type="email" class="form-control" placeholder="Enter Email" id="emailid1" name="em" autocomplete="off" required>
        <p id="mail1"></p>
        <!-- <input type="submit" value="sign in" name="btn" onclick="login()" class="login-btn"> -->
        <input type="submit" value="Send Email"  name="btn_forget" class="login-btn">
        <p class="message">Not registered? <a href="sign up.php">Create an account</a></p>
        <p class="message"> Already have an Account? <a href="sign in.php">For Login</a></p>
      </div>
    </div>

<?php


if (isset($_POST['btn_forget'])) {
    $em = @$_POST['em'];

    $q = "select * from users where emailId='$em'";
    $count = mysqli_num_rows(mysqli_query($con, $q));
    if ($count == 1) {
        $q1 = "select * from token where Email='$em'";
        $countem = mysqli_num_rows(mysqli_query($con, $q1));
        if ($countem == 1) {
            //$_SESSION['success'] = "A Password reset link is already sent to your mail please check. New link will be generated after old link expires";
            ?>
            <script>alert("A Password reset link is already sent to your mail please check. New link will be generated after old link expires");</script>
            <?php
        } else {
            date_default_timezone_set("Asia/Kolkata");
            $s_time = date("Y-m-d G:i:s");

            $token = hash('sha512', $s_time);
            $otp = mt_rand(100000, 999999);
            $ins_token = "INSERT INTO token VALUES ('','$em','$s_time','$token',$otp)";
            // echo "$ins_token";
            if (mysqli_query($con, $ins_token)) {
                $link = "http://localhost/website/verify_otp.php?email=$em&token=$token";
                //echo $link;
                $mail = new PHPMailer();
                $headers = 'From: Tour & Travel Egency <kkhimsuriya805@rku.ac.in>' . "\r\n";
                $headers .= 'Reply-To: <kkhimsuriya805@rku.ac.in>' . "\r\n";
                $headers .= 'X-Mailer: PHP/' . phpversion();
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                $to = $em;
                $subject = "Password reset link for Tour & Travel Step";
                $body = 'OTP for password reset is ' . $otp . ' <br/>This is the password reset link for your account with Brogan .The link is valid for 30 minutes.=> ' . @$link .  "<br/> Please use forgot password facility again if the link has expired";

                $mail->IsSMTP(); // telling the class to use SMTP
                // $mail->Mailer = "smtp";
                $mail->SMTPDebug  = 2;                // enables SMTP debug information (for testing)
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );                                             // 1 = errors and messages
                // 2 = messages only
                $mail->SMTPAuth   = true;                  // enable SMTP authentication
                $mail->SMTPSecure = "tls";         // sets the prefix to the servier
                $mail->Host       = 'smtp.gmail.com';      // sets GMAIL as the SMTP server
                $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
                $mail->Username   = "kkhimsuriya805@rku.ac.in";  // GMAIL username(from)
                $mail->Password   = "K0027389";            // GMAIL password(from)
                $mail->SetFrom('kkhimsuriya805@rku.ac.in', 'Tour & Travel'); //from
                $mail->AddReplyTo($em, "Tour & Travel "); //to
                $mail->Subject    = "Password reset link for Tour & Travel";
                $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
                $mail->MsgHTML($body);
                $address = $em; //to
                $mail->AddAddress($address, "Tour & Travel");
                if (!$mail->Send()) {
                    //$_SESSION['error'] = "Failed to reset the password please try again after sometime";
                    ?>
                    <script>alert("Failed to reset the password please try again after sometime");</script>
                    <?php
                } else {
                    //$_SESSION['success'] = "Password reset link has been sent to your registered email.Please check the spam also.";
                    ?>
                    <script>alert("Password reset link has been sent to your registered email.Please check the spam also.");</script>
                    <?php
                    
                 
                }
            }
        }
    } else {
        //$_SESSION['error'] = "No such Email address is registered";
        ?>
        <script>alert("No such Email address is registered");</script>
        <?php
?>
        <script>
            window.location = "forgot.php";
        </script>
<?php
}
}
?>
