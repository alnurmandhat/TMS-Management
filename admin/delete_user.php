<?php
// include_once('admin_header.php');
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$em = $_REQUEST['em'];
$q = "update users set status='Deleted' where emailId='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'User Deleted Successfully';
} else {
    $_SESSION['error'] = 'User Deletion Failed';
}
?>
<script>
     window.location = "manage_user.php";
</script>