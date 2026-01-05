<?php
// include_once("Header.php");
include_once("conection.php");
session_start();
?>
<link rel="stylesheet" href="style_for_s_in_s_up.css">
<?php

date_default_timezone_set("Asia/Kolkata");
$db_time = date("Y-m-d G:i:s", strtotime("+ 30 min"));
$q = "DELETE FROM `token` WHERE `sent_time`>='$db_time'";
mysqli_query($con, $q);

// $sql="select * from token where otp=''";
$token = $_SESSION['token'];
$em = $_SESSION['em'];


$q = "select * from token WHERE Email='$em' and token='$token'";
$t = mysqli_query($con, $q);
$count = mysqli_num_rows($t);
if ($count == 0) {
    $_SESSION['error'] = "Password reset token Expired";
?>
    <!-- <script type="text/javascript">
        window.location = "forgot.php";
    </script> -->
    <?php
}
// echo "$db_time";
if (isset($_POST['submit'])) {
    $token = $_SESSION['token'];
    $login_id = $_SESSION['em'];
    $passwd = $_POST['npwd'];
    
    //$passwd = hash('sha512',$passwd);

    $q = "select * from token WHERE Email='$login_id' and token='$token'";
    $t = mysqli_query($con, $q);
    $count = mysqli_num_rows($t);
    $temp = mysqli_fetch_assoc($t);
    if ($count > 0) {
        // if ($login_id==$temp['Email'] && $token==$temp['token']) 
        // {
        $q = "UPDATE `users` SET `Password`='$passwd' WHERE EmailId='$login_id'";
        // $r=mysqli_query($con, $q);

        if (mysqli_query($con, $q)) {
            $q = "DELETE FROM `token` WHERE email='$login_id'";
           if (mysqli_query($con, $q)) {
                $_SESSION['success'] = "Password Reset Successfull. Log into your account";
    ?>
                <script type="text/javascript">
                    alert("password reset successfull log into your account")
                    window.location = "sign in.php";
                </script>
            <?php
            } else {
                $_SESSION['error'] = "Error in Resetting Password. Try again after sometime";
            ?>
                <script type="text/javascript">
                    window.location = "sign in.php";
                </script>
            <?php
            }
        } else {
            $_SESSION['error'] = "Error in Resetting Password. Try again after sometime";
            ?>
            <script type="text/javascript">
                window.location = "sign in.php";
            </script>
        <?php
        }
    } else {
        $_SESSION['error'] = "Password Reset Token Expired";
        ?>
        <script type="text/javascript">
            window.location = "forgot.php";
        </script>
<?php
    }
}
?>


<!-- <div class="row">
    <div class="offset-lg-3 offset-md-3 col-6">
        <h1 align="center"> Change Password</h1>
        <form action="" method="post" onSubmit="return(validate_change_password());">
            <div class="row">
                <div class="col">
                    <input type="password" class="form-control" placeholder="Enter New Password" name="npwd" id="pwd1">
                    <p id="pwd_err"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="password" class="form-control" placeholder="Retype New Password" name="rnpwd" id="repwd1">
                    <p id="repwd_err"></p>
                </div>
            </div>
            <input type="text" name="token" hidden="hidden" value="<?php //echo $token; ?>">
            <input type="text" name="em" hidden="hidden" value="<?php //echo $em; ?>">

            <button type="submit" class="btn btn-danger" name="submit">Change Password</button>
        </form>
    </div>
</div> -->

<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
          <h1 class="form-title">Change Password</h1>
          </div>
        </div>
        
        <form action="" method="post">
        <input type="password" class="form-control" placeholder="Enter New Password" name="npwd" id="emailid1" required>
        <p id="mail1"></p>
        <input type="password" class="form-control" placeholder="Retype New Password" name="rnpwd" id="pass" required>
        <p id="passw"></p>
        <input type="text" name="token" hidden="hidden" value="<?php echo $token; ?>">
         <input type="text" name="em" hidden="hidden" value="<?php echo $em; ?>">

        <input type="submit" value="Change password" name="submit" class="login-btn">
      </div>
    </div>

<?php
// include("Footer.php");
?>