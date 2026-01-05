<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update gallery set status='Active' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Gallery Activated Successfully';
} else {
    $_SESSION['error'] = 'Gallery Activation Failed';
}
?>
<script>
    window.location = "manage_gallery.php";
</script>