<?php
// include_once('admin_header.php');
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$d = $_REQUEST['id'];
$q = "update packages set STATUS ='Deleted' where PackageId ='$d'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Packages Deleted Successfully';
} else {
    $_SESSION['error'] = 'Packages Deletion Failed';
}
?>
<script>
     window.location = "manage_package.php";
</script>