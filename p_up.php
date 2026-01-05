<html>
    <head>
    <link rel="stylesheet" href="style_for_s_in_s_up.css">
    <title>tour and travel agency</title>
    <?php
    include_once("conection.php");
    ?>
    </head>
<body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
          <h1 class="form-title">Registere</h1>
            <p class="p">create your account!....</p>
          </div>
        </div>
        <form onSubmit="return(validate123());" method="post" action="" enctype="multipart/form-data">
<input type="text" class="form-control" placeholder="Enter Username" id="fname1" name="fn1" required>
<p id="fn1"></p>
<input type="text" class="form-control" placeholder="Enter Agency Name" id="fname1" name="an" required>
<p id="fn1"></p>
<input type="email" class="form-control" placeholder="Enter Email" id="emailid1" name="eid" required>
<p id="mail1"></p>
<input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pwd" required>
<p id="passw"></p>
<input type="password" class="form-control" placeholder="Re-Enter Password" id="password1" name="repwd" required>
<p id="passw1"></p>
<input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile1" name="mobile" required>
<p id="mno"> </p>
<input type="file" name="pf" class="form-control" placeholder="Profile pic" required>
<p></p>
<input type="submit" value="sign up" name="btn" class="login-btn">
<p class="message">Back To Home? <a href="home.php">Click here</a></p>
</form>
<br> 
      </div>      
    </div>
</body>
<script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="validation.js"></script>
</script>
</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php'); 

if(isset($_POST['btn']))
{ 
    $n = @$_POST['fn1'];
    $an=@$_POST['an'];
    $em = @$_POST['eid'];
    $p = @$_POST['pwd'];
    $pn= @$_POST['mobile'];
    $pf=@$_FILES['pf']['name'];
    $t = date("Y-m-d G:i:s");

    $sql= "insert into admin_panel values('','$n','$an','$em','$p','$pn','$pf','$t','Inactive')";

    if (mysqli_query($con, $sql)) 
    {
        $link = "http://localhost/website/panel_account_activation.php?email=$em";
        $mail = new PHPMailer();
        $headers = 'From: Tour & Travel Website <kkhimsuriya805@rku.ac.in>' . "\r\n";
        $headers .= 'Reply-To: <kkhimsuriya805@rku.ac.in>' . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $to = $em;
        $subject = "Account Activation link";
        $body = 'Your account is created successfully. Please click on the activation link to activate your account and add your agency in this website. <br> <br>' .
        $link;

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
        //2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
        $mail->Host       = 'smtp.gmail.com';      // sets GMAIL as the SMTP server
        $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "kkhimsuriya805@rku.ac.in";  // GMAIL username(from)
        $mail->Password   = "K0027389";            // GMAIL password(from)
        $mail->SetFrom('kkhimsuriya805@rku.ac.in', 'Tour & Travel Website'); //from
        $mail->AddReplyTo($em, "Tour & Travel Website"); //to
        $mail->Subject    = "Account activation link for Tour & Travel Website";
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
        $mail->MsgHTML($body);
        $address = $em; //to
        $mail->AddAddress($address, "Tour & Travel Website");
       if (!$mail->Send()) {
            $_SESSION['reg_msg_err'] = "Error in sending activation link. Please try again.";
            ?>
        <script>alert("Error in sending activation link. Please try again.");
            //alert("Account created successfully");</script>
            <?php
        } 
        else 
        {
            //$_SESSION['reg_msg'] = "Account created successfully. An activation link is sent to your registered email address. click on the link to activate your account.";
            ?>
              <script>alert("Account created successfully. An activation link is sent to your registered email address. click on the link to activate your account.");</script>
            <?php
        //}
        if($_FILES['pf']['name']=="")
        {?>
        <script> alert("Select file to upload");</script><?php
        }
        else
        {   if($_FILES['pf']['type']=="image/jpeg")
            {?>
            <script> alert("Successfully registrate");</script>
            <?php
                move_uploaded_file($_FILES['pf']['tmp_name'],"login/images/".$_FILES['pf']['name']);
            }
            else
            {?>
            <h2 style="color:green ;">Select jpg file to upload</h2><?php
                //echo "Select jpg file";
            }
        }
    } 
}
    else 
    {
        //$_SESSION['reg_msg_err'] = "Error in creating account. Please try again.";
        ?>
        <script>alert("Error in creating account. Please try again.");</script>
            <?php
    }
?>
    <script>
        //window.location = "sign up.php";
    </script>
<?php
}
?>
