<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update services set status='Inactive' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Services Deactivated Successfully';
} else {
    $_SESSION['error'] = 'Services Deactivation Failed';

}
?>
<script>
    window.location = "manage_services.php";
</script>