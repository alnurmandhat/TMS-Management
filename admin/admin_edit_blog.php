<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q3 = "select * from blog where id='$id'";
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>EDIT BLOG</li>
            </ol>
            <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
<form  method="post" class="form-horizontal" >
                      <div class="form-group">
                          <label class="col-md-2 control-label">Photo</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="file" name="p" class="form-control1"  required="" value="<?php echo $r2[1] ?>" >
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Slogan</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="sl" class="form-control1" required="" value="<?php echo $r2[2] ?>">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Text</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="txt"  required  ><?php echo $r2[3] ?></textarea> 
									</div>
								</div>	
                      
                      
                      <div class="col-sm-8 col-sm-offset-2">
              <button type="submit" name="submit" class="btn-primary btn">Upload</button>
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



    if(isset($_POST['submit']))
    {
        $p=$_POST['p'];
        $s=$_POST['sl'];
        $txt=$_POST['txt'];
        $t = date("Y-m-d G:i:s");
    $q1 = "update blog set photo ='$p',slogan='$s' ,texts='$txt'admindate='$t' where id='$id'";
    if (mysqli_query($con, $q1)) {
        $_SESSION['success'] = "Blogs data update Successfully";
    } else {
        $_SESSION['error'] = "Blogs failed";
    }

?>
    <script>
        window.location = "manage_blog.php";
    </script>
<?php
}

?>
</div>
</div>