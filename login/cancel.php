<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
session_start();
$id = $_REQUEST['id'];
$q = "update booking set status='cancel' where BookingId ='$id'";
if (mysqli_query($con, $q)) {
 $_SESSION['cancel']=$id;
 ?>
    <script>
        alert("Booking Cancelled Successfully");
    </script>
     <?php
} else {
    ?>
    <script>
        alert("Booking Cancelled failed");
    </script>
    <?php
}
?>
<script>
    window.location = "tour-history.php";
</script>