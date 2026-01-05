<?php
session_start();
if (!isset($_SESSION['admin_user']) && !isset($_SESSION['admin_pwd'])) {
?>
    <script>
        window.location="../a_login.php";
    </script>
<?php
}