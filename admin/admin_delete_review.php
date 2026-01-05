<?php
// include_once('admin_header.php');

include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q = "update review set status='Deleted' where id ='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Review Deleted Successfully';
} else {
    $_SESSION['error'] = 'Review Deletion Failed';
}
?>
<script>
     window.location = "manage_review.php";
</script>