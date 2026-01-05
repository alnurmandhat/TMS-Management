<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
$id = $_REQUEST['id'];
$q = "update blog set status='Active' where id ='$id'";
if (mysqli_query($con, $q)) {
    $_SESSION['success'] = 'Blog Activated Successfully';
} else {
    $_SESSION['error'] = 'Blog Activation Failed';
}
?>
<script>
    window.location = "manage_blog.php";
</script>