<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$em = $_REQUEST['em'];
$q3 = "select * from issues where UserEmail='$em'";
$result2 = mysqli_query($con, $q3);
?>
<body>
<div class="page-container">
<div class="left-content">
	   <div class="mother-grid-inner">
        <?php
        include_once("includes/header.php");
        ?>
        <div class="clearfix"> </div>
</div>	
<?php
while($r2=mysqli_fetch_array($result2)) {
?>
    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>EDIT USER</li>
            </ol>
            <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
                  <form method="post" class="form-horizontal" onSubmit="return valid();">

                    


  <div class="form-group">
                          <label class="col-md-2 control-label">Email</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" class="form-control1" name="em" 
                                  value=<?php echo $r2[1]?> required="" readonly>
                              </div>
                          </div>
                      </div>
 <div class="form-group">
                <label class="col-md-2 control-label">issue</label>
                    <div class="col-md-8">
                        <div class="input-group">
                        <input type="text" class="form-control1" name="n" 
                                  value=<?php echo $r2[2]?> >
                            </div>
                        </div>
                      </div>
                      <div class="form-group">
                <label class="col-md-2 control-label">Description</label>
                    <div class="col-md-8">
                        <div class="input-group">
                        <input type="text" class="form-control1" name="n1" 
                                  value=<?php echo $r2[3]?> >
                            </div>
                        </div>
                      </div>

                      
                      <div class="col-sm-8 col-sm-offset-2">
              <button type="submit" name="btn_edit" class="btn-primary btn">Submit</button>
              <button type="reset" class="btn-inverse btn">Reset</button>
          </div>
      </div>
          
   </form>
  </div>
</div>
</div>
</div>
</div>
</div>            

<?php
}


if (isset($_POST['btn_edit'])) {
    $fn = $_POST['n'];
    $e= $_POST['n1'];
    
   

    $q1 = "update issues set Description ='$e' , issue='$fn' where UserEmail='$em'";
    if (mysqli_query($con, $q1)) {
        $_SESSION['success'] = "User data Updated Successfully";
    } else {
        $_SESSION['error'] = "User data updation failed";
    }

?>
    <script>
        window.location = "manage_isuue.php";
    </script>
<?php
}
?>
</div>
</div>