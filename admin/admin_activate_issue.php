<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$em = $_REQUEST['em'];
$q = "update  issues set status='Active' where UserEmail ='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'issues Activated Successfully';
} else {
    $_SESSION['error'] = 'issues Activation Failed';
}
?>
<script>
    window.location = "manage_isuue.php";
</script>