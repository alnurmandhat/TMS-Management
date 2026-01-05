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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Add Booking</li>
            </ol>

 <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
                  <form  method="post" class="form-horizontal" >
                      <div class="form-group">
                          <label class="col-md-2 control-label">Package</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="p" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Agency Name</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="a_name" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Email</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="email" name="em" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">package Type</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="pt" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Members</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="number" name="m" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">arrivals date</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="date" name="ad" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">leaving date</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="date" name="ld" class="form-control1" id="exampleInputPassword1" required="" name="s">
                              </div>
                          </div>
                      </div>
                      <!-- <div class="form-group">
                          <label class="col-md-2 control-label">Updating date</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="date" name="ld1" class="form-control1" id="exampleInputPassword1" required="" name="s">
                              </div>
                          </div>
                      </div> -->
                      <div class="form-group">
                          <label class="col-md-2 control-label">Class</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="c" class="form-control1" id="exampleInputPassword1" required="" name="s">
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
    $p=$_POST['p'];
    $an=$_POST['a_name'];
    $em=$_POST['em'];
    $pt=$_POST['pt'];
    $m=$_POST['m'];
    $ad=$_POST['ad'];
    $ld=$_POST['ld'];
    // $up=$_POST['id1'];
    $c=$_POST['c'];
    $s=$_POST['s'];
    $s_time = date("Y-m-d G:i:s");
    $q="insert into booking values('','$em','$p','$an','$pt','$m','$ad','$ld','$c','','$s');";
    if(mysqli_query($con,$q))
    {
        ?>
        <script> alert("booking successfully");
        window.location="manage_booking.php";
    </script>
        <?php
            //echo "Select file to upload";
  }
  else{
    ?>
    <script> alert("booking failed");
    window.location="manage_booking.php";
    </script>
    <?php
  }

}

?>
