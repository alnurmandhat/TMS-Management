<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update packages set STATUS='Active' where PackageId ='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Package Activated Successfully';
} else {
    $_SESSION['error'] = 'Package Activation Failed';
}
?>
<script>
    window.location = "manage_package.php";
</script>