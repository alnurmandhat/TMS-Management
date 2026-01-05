<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update review set status='Inactive' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Review Deactivated Successfully';
} else {
    $_SESSION['error'] = 'Review Deactivation Failed';

}
?>
<script>
    window.location = "manage_review.php";
</script>