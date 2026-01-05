<?php
// include_once('header.php');
include_once("conection.php");

if (isset($_POST['submit'])) {
    $login_id = $_SESSION[];
    echo $em;
    $token = $token;
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
                $_SESSION['success'] = "OTP Matched.";
?>
                <script>
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
        <!-- <script type="text/javascript">
            alert("Password reset token expired.");
            window.location.href = "sign in.php";
        </script> -->
<?php
    }
}
?>