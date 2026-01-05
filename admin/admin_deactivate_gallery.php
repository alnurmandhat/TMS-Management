<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update gallery set status='Inactive' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Gallery Deactivated Successfully';
} else {
    $_SESSION['error'] = 'Gallery Deactivation Failed';

}
?>
<script>
    window.location = "manage_gallery.php";
</script>