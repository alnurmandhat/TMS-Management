<?php
// include_once('admin_header.php');
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q = "update gallery set status='Deleted' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Gallery Deleted Successfully';
} else {
    $_SESSION['error'] = 'Gallery Deletion Failed';
}
?>
<script>
     window.location = "manage_gallery.php";
</script>