<!-- extra css -->
    
<link rel="stylesheet" href="css1/boot.css">
    <link rel="stylesheet" href="fontawesome/all1.css">

    <!-- extra js -->
    <script type="text/javascript" src="js1/boot.js"></script>
    <script type="text/javascript" src="js1/jquery1.slim.min.js"></script>
    <script type="text/javascript" src="js1/popper1.min.js"></script>
    <script type="text/javascript" src="js1/boot.bundle.min.js"></script>
    <script type="text/javascript" src="js1/jquery1.min.js"></script>
    <script type="text/javascript" src="js1/boot.min.js"></script>

<?php
    if (isset($_SESSION['reg_msg'])) {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertmsg">
            <strong>Success</strong> <?php echo $_SESSION['reg_msg']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            setTimeout("", 5000);
        </script>
    <?php
        unset($_SESSION['reg_msg']);
    }
    
    if (isset($_SESSION['reg_msg_err'])) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertmsg">
            <strong>Error</strong> <?php echo $_SESSION['reg_msg_err']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script>
            setTimeout("", 5000);
        </script>
    <?php
        unset($_SESSION['reg_msg_err']);
    }
    ?>