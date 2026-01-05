<?php
//include_once("header.php");
include_once("conection.php");
session_start();
$em = $_GET['email'];
//echo $em;
$q1 = "select * from users where EmailId='$em' and status='Active'";
$result = mysqli_num_rows(mysqli_query($con, $q1));
if ($result == 0) 
{
    $q = "update users set status='Active' where EmailId='$em'";
    if (mysqli_query($con, $q))
    {
        ?><script>alert("Account activated successfully. Please Log in to your account.");</script><?php
        //$_SESSION['Activation_succ'] = "Account activated successfully. Please Log in to your account.";
    } else {
        ?><script>alert("Account activation Failed");</script><?php
        //$_SESSION['Activation_err'] = "Account activation Failed";
    }
} else {
    ?><script>alert("Account is already activated. Log in to your account");</script>
    <?php
    //$_SESSION['Activation_err'] = "Account is already activated. Log in to your account";
}
?>
<script>
    window.location = "sign in.php";
</script>
<?php