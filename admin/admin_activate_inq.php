<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$em = $_REQUEST['em'];
$q = "update enquiry set status='Active' where emailId='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'enquiry Activated Successfully';
} else {
    $_SESSION['error'] = 'enquiry Activation Failed';
}
?>
<script>
    window.location = "manage_inq.php";
</script>