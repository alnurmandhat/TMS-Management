<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$em = $_REQUEST['em'];
$q = "update users set status='Active' where emailId='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'User Activated Successfully';
} else {
    $_SESSION['error'] = 'User Activation Failed';
}
?>
<script>
    window.location = "manage_user.php";
</script>