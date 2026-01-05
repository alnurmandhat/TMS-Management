<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update contact set status='Active' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Contact Activated Successfully';
} else {
    $_SESSION['error'] = 'Contact Activation Failed';
}
?>
<script>
    window.location = "manage_contact.php";
</script>