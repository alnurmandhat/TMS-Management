<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
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
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Add Enquiry</li>
            </ol>

 <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
                  <form  method="post" class="form-horizontal" >
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
                                  <input type="text" name="em" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Mobile</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="m" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Subject</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="sub" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">DESCRIPTION</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="dis" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                        </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Status</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="s" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-8 col-sm-offset-2">
              <button type="submit" name="submit" class="btn-primary btn">SUBMIT</button>
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
   $m=$_POST['m'];
   $sub=$_POST['sub'];
   $d=$_POST['dis'];
    $s=$_POST['s'];
    $s_time = date("Y-m-d G:i:s");
    $q="insert into enquiry values('','$n','$em','$m','$sub','$d','$s_time','$s');";
    if(mysqli_query($con,$q))
    {
        ?>
        <script> alert("enquiry successfully");
        window.location="manage_inq.php";
    </script>
        <?php
            //echo "Select file to upload";
  }
  else{
    ?>
    <script> alert("enquiry failed");
    window.location="manage_inq.php";
    </script>
    <?php
  }

}

?>
