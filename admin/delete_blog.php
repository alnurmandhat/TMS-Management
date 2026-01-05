<?php
// include_once('admin_header.php');

include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q = "update blog set status='Deleted' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'blog Deleted Successfully';
} else {
    $_SESSION['error'] = 'blog Deletion Failed';
}
?>
<script>
     window.location = "manage_blog.php";
</script>