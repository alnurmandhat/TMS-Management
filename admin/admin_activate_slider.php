<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update slider set status='Active' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Slider Activated Successfully';
} else {
    $_SESSION['error'] = 'Slider Activation Failed';
}
?>
<script>
    window.location = "manage_Slider.php";
</script>