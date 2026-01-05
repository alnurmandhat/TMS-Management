<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update contact set status='Inactive' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Contact Deactivated Successfully';
} else {
    $_SESSION['error'] = 'Contact Deactivation Failed';

}
?>
<script>
    window.location = "manage_contact.php";
</script>