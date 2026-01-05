<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update booking set status='Inactive' where BookingId ='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Booking Deactivated Successfully';
} else {
    $_SESSION['error'] = 'Booking Deactivation Failed';

}
?>
<script>
    window.location = "manage_booking.php";
</script>