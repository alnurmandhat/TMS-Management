<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update services set status='Active' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Service Activated Successfully';
} else {
    $_SESSION['error'] = 'Services Activation Failed';
}
?>
<script>
    window.location = "manage_services.php";
</script>