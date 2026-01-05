<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$em = $_REQUEST['em'];
$q = "update  issues set AdminRemark='Read' where UserEmail='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Read Successfully';
} else {
    $_SESSION['error'] = 'Read Failed';
}
?>
<script>
    window.location = "manage_isuue.php";
</script>