<?php
// include_once('admin_header.php');

include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$em = $_REQUEST['em'];
$q = "update issues set status='Deleted' where UserEmail ='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Issues Deleted Successfully';
} else {
    $_SESSION['error'] = 'Issues Deletion Failed';
}
?>
<script>
     window.location = "manage_isuue.php";
</script>