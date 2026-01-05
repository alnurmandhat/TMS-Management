<?php
// include_once('admin_header.php');
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q = "update slider set status='Deleted' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Slider Deleted Successfully';
} else {
    $_SESSION['error'] = 'Slider Deletion Failed';
}
?>
<script>
     window.location = "manage_Slider.php";
</script>