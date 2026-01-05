<?php
// include_once("Header.php");
include_once("conection.php");
?>
 <link rel="stylesheet" href="style_for_s_in_s_up.css">
<?php
session_start();

if (!isset($_POST['submit'])) {

    date_default_timezone_set("Asia/Kolkata");
    $db_time = date("Y-m-d G:i:s", strtotime("+ 30 min"));
    $q = "DELETE FROM `token` WHERE `sent_time`>='$db_time'";
    mysqli_query($con, $q);
    $_SESSION['token'] = $_REQUEST['token'];
    $_SESSION['em'] = $_REQUEST['email'];

    $em = $_SESSION['em'];
    $token =   $_SESSION['token'];
    $q1 = "select * from token WHERE Email='$em' and token='$token'";
    //echo $q1;
    $t = mysqli_query($con, $q1);
    $count = mysqli_num_rows($t);
    if ($count == 0) {
        $_SESSION['error'] = "Password reset token expired.";
?>
        <script type="text/javascript">
            window.location = "login.php";
        </script>
<?php
    }
}

?>
<!-- <div class="container">
    <div class="row">
        <div class="offset-sm-3 col-sm-6">
            <h1> Verify OTP</h1>
            <form action="verify_otp_action.php" method="post">
                <div class="row">
                    <div clas="col">
                        <input type="text" class="form-control" placeholder="Enter OTP" name="otp" id="pass">
                    </div>
                </div>
                <div class="row">
                    <div clas="col">
                        <input type="submit" class="btn btn-danger" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
          <h1 class="form-title">Verify OTP</h1>
          </div>
        </div> 
        <form method="post"  action="">
        <input type="text" class="" placeholder="Enter OTP" name="otp" id="pass">
        <input type="submit" value="submit" name="submit"  class="login-btn">
      </div>
    </div>
<br>
<?php
// include("Footer.php");
if (isset($_POST['submit'])) {
    $login_id = $_REQUEST['email'];
    $token = $_REQUEST['token'];
    $otp = $_POST['otp'];
    $q = "select * from token WHERE Email='$login_id' and token='$token'";
    // echo $q;
    $t = mysqli_query($con, $q);
    $count = mysqli_num_rows($t);
    //$temp=mysqli_fetch_assoc($t);
    if ($count > 0) {
        while ($res = mysqli_fetch_array($t)) {
            $em = $res[1];
            $token = $res[3];
            // $_SESSION['em'] = $em;
            // $_SESSION['token'] = $token;
            if ($otp == $res[4]) {
                // $_SESSION['success'] = "OTP Matched.";
                $_SESSION['em']=$login_id;
                $_SESSION['tokem']=$token;
                
?>
                <script>
                    alert("OTP Matched");
                    window.location = "change_password_form.php";
                </script>
            <?php
            } else {
                $_SESSION['error'] = "Incorrect OTP.";
            ?>
                <script type="text/javascript">
                    window.location = "verify_otp.php";
                </script>
        <?php
            }
        }
    } else { ?>
        <script type="text/javascript">
            alert("Password reset token expired.");
            window.location.href = "sign in.php";
        </script>
<?php
    }
}
?>