<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$em = $_REQUEST['em'];
$q = "update  issues set AdminRemark='View By Admin' where UserEmail='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'view  Successfully';
} else {
    $_SESSION['error'] = 'view  Failed';
}
?>
<script>
    window.location = "manage_isuue.php";
</script>