<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
?>
<body>
<!-- <header> -->
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
        <?php
        include_once("includes/header.php");
        ?>
        <div class="clearfix"> </div>
</div>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Add Users</li>
            </ol>

 <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
                  <form  method="post" class="form-horizontal" onSubmit="return valid();">
                      <div class="form-group">
                          <label class="col-md-2 control-label">Name</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="fn" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Email</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="Email" name="em" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Password</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="password" name="pwd" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Mobile number</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="number" name="mn" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Status</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="s" class="form-control1" id="exampleInputPassword1" required="" name="s">
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-8 col-sm-offset-2">
              <button type="submit" name="submit" class="btn-primary btn">ADD</button>
              <button type="reset" class="btn-inverse btn">Reset</button>
          </div>
      </div>
          
                  </form>


</div>
</div>
<?php
if(isset($_POST['submit']))
{
    $n=$_POST['fn'];
    $em=$_POST['em'];
    $m=$_POST['mn'];
    $pwd=$_POST['pwd'];
    $s=$_POST['s'];
    $s_time = date("Y-m-d G:i:s");
    $q="insert into users values('','$n','$em','$pwd','$m','$s_time','','$s');";
    if(mysqli_query($con,$q))
    {
        ?>
        <script> alert("registration successfully");
        window.location="manage_user.php";
    </script>
        <?php
            //echo "Select file to upload";
  }
  else{
    ?>
    <script> alert("registration failed");
    window.location="manage_user.php";
    </script>
    <?php
  }

}

?>
