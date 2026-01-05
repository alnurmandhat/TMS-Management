<?php
include_once("includes/session_set.php");
include_once("includes/sidebarmenu.php");
include_once("../conection.php");
mysqli_select_db($con,"tms");
$type=$_SESSION['panel_user'];
$q6="select * from packages";
$pack = mysqli_num_rows(mysqli_query($con,$q6));
$q2= "select * from booking where status!='cancel'";
$booking = mysqli_num_rows(mysqli_query($con, $q2));
$q7= "select * from booking where status='cancel'";
$c_booking=mysqli_num_rows(mysqli_query($con,$q7));
?>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>

<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-2.1.4.min.js"></script>

<div class="page-container">
  
<div class="left-content">
	   <div class="mother-grid-inner">
        <?php
        include_once("includes/header.php");
        ?>
        <div class="clearfix"></div>	
        
</header>

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 27%;
  padding: 5px;
  
}
.column1 {
  float: left;
  width: 27%;
  padding: 5px;
  /* margin-left:20%;
  margin-top:-30%;
   */
}

.row::after {
  content: "";
  clear: both;
 /* padding:2px; */
  display: table;
}
</style>

<ol class="breadcrumb">
                <li class="breadcrumb-item" ><a href="dashboard.php" style="background-color:white;">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<div class="four-grids">
					
				
				
						<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Total packages</h3>
								<h4>
								<?php
									echo $pack ;
								?>
								</h4>
								<br>
							<p style="text-align: center;"><a href="manage_package.php" class="btn btn-dark">View More</a></p>
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Bookings</h3>
								<h4>
								<?php
									echo $booking;
								?>
								</h4>
							</div>
							<br>
							<p style="text-align: center;"><a href="manage_booking.php" class="btn btn-dark">View More</a></p>
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Booking Cancel</h3>
								<h4>
								<?php
									echo $c_booking;
								?>
								</h4>
							</div>
							<br>
							<p style="text-align: center;"><a href="manage_booking_cancel.php" class="btn btn-dark">View More</a></p>
						</div>
					</div>
						<div class="clearfix"></div>
				</div>
				
				<?php include('includes/footer.php');?>							
</div>
</div>
</div>