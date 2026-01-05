<?php
// include_once('admin_header.php');
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$em = $_REQUEST['em'];
$q = "update enquiry set status='Deleted' where EmailId ='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Enquiry Deleted Successfully';
} else {
    $_SESSION['error'] = 'Enquiry Deletion Failed';
}
?>
<script>
     window.location = "manage_inq.php";
</script>