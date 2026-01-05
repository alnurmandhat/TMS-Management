<?php
// include_once('admin_header.php');

include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q = "update booking set status='Deleted' where BookingId ='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'booking Deleted Successfully';
} else {
    $_SESSION['error'] = 'booking Deletion Failed';
}
?>
<script>
     window.location = "manage_booking.php";
</script>