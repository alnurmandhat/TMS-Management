<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update slider set status='Inactive' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Slider Deactivated Successfully';
} else {
    $_SESSION['error'] = 'Slider Deactivation Failed';

}
?>
<script>
    window.location = "manage_Slider.php";
</script>