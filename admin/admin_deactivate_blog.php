<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update blog set status='Inactive' where id='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Blog Deactivated Successfully';
} else {
    $_SESSION['error'] = 'Blog Deactivation Failed';

}
?>
<script>
    window.location = "manage_Blog.php";
</script>