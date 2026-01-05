<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$em = $_REQUEST['em'];
$q = "update enquiry set status='Inactive' where EmailId ='$em'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Enquiry Deactivated Successfully';
} else {
    $_SESSION['error'] = 'Enquiry Deactivation Failed';

}
?>
<script>
    window.location = "manage_inq.php";
</script>