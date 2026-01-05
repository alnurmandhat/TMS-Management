<?php

include_once("../connection.php");
mysqli_select_db($connect,"tms");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('PHPMailer\PHPMailer.php');
require('PHPMailer\SMTP.php');
require('PHPMailer\Exception.php');

$em = $_REQUEST['em'];

$link = "http://localhost/2021_Sample/2021_sdsce/account_activation.php?email=$em";
$mail = new PHPMailer();

$body = 'Your account was deleted. to Reactivate your account please click on the reactivation link. <br> <br>' .
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
// 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = 'smtp.gmail.com';      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "janki.kansagra@rku.ac.in";  // GMAIL username(from)
$mail->Password   = "*****************";            // GMAIL password(from)
$mail->SetFrom('janki.kansagra@rku.ac.in', 'Student Demo Website'); //from
$mail->AddReplyTo($em, "Student Demo Website"); //to
$mail->Subject    = "Account activation link for Student Demo Website";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$address = $em; //to
$mail->AddAddress($address, "Student Demo Website");
if (!$mail->Send()) {
    $_SESSION['error'] = "Error in sending reactivation link. Please try again.";
} else {
    $_SESSION['success'] = "Account reactivation link is sent to your registered email address. click on the link to reactivate your account.";
}
?>
<script>
    window.location = "manage_users.php";
</script>