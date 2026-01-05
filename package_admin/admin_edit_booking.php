<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/session_set.php");

include_once("includes/sidebarmenu.php");
// include_once("includes/session_set.php");
$id = $_REQUEST['id'];
$q3 = "select * from booking where BookingId='$id'";
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>EDIT BOOKING</li>
            </ol>
            <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
<form  method="post" class="form-horizontal" >
                      <div class="form-group">
                          <label class="col-md-2 control-label">Package</label>
                         
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="p" class="form-control1" id="exampleInputPassword1" required="" value="<?php echo $r2[2] ?>" readonly>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">package Type</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="pt" class="form-control1" id="exampleInputPassword1" required="" value="<?php echo $r2[4] ?>">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Members</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="number" name="m" class="form-control1" id="exampleInputPassword1" required="" value="<?php echo $r2[5] ?>">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">arrivals date</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="date" name="ad" class="form-control1" id="exampleInputPassword1" required="" value="<?php echo $r2[6] ?>">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">leaving date</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="date"  class="form-control1" id="exampleInputPassword1" required="" name="ld" value="<?php echo $r2[7] ?>">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Class</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="c" class="form-control1" id="exampleInputPassword1" required="" value="<?php echo $r2[8] ?>">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Status</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="s" class="form-control1" id="exampleInputPassword1" required="" value="<?php echo $r2[10] ?>">
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
</div>
</div>
</div>
</div>            


<?php
}



    if(isset($_POST['submit']))
    {
        $p=$_POST['p'];
        $pt=$_POST['pt'];
        $m=$_POST['m'];
        $ad=$_POST['ad'];
        $ld=$_POST['ld'];
        $c=$_POST['c'];
        $s=$_POST['s'];
        $t = date("Y-m-d G:i:s");

    $q1 = "update booking set packageType ='$pt', Member='$m', arrivals='$ad',leaving='$ld',  Class='$c', status='$s' where BookingId ='$id'";
    if (mysqli_query($con, $q1)) {
        $_SESSION['success'] = "booking data update Successfully";
    } else {
        $_SESSION['error'] = "booking failed";
    }

?>
    <script>
        window.location = "manage_booking.php";
    </script>
<?php
}