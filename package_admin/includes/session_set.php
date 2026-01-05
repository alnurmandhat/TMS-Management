<?php
session_start();
if (!isset($_SESSION['panel_user']) && !isset($_SESSION['panel_pwd'])) {
?>
    <script>
        window.location="../p_login.php";
    </script>
<?php
}