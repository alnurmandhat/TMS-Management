<?php
include_once("includes/session_set.php");
include_once("includes/sidebarmenu.php");
include_once("../conection.php");
mysqli_select_db($con,"tms");
$q1="select *from users";
$users = mysqli_num_rows(mysqli_query($con, $q1));
$q2= "select * from booking";
$booking = mysqli_num_rows(mysqli_query($con, $q2));
$q3="select * from enquiry";
$enq = mysqli_num_rows(mysqli_query($con,$q3));
$q4="select * from issues";
$ins = mysqli_num_rows(mysqli_query($con,$q4));
$q5="select * from review";
$review = mysqli_num_rows(mysqli_query($con,$q5));
$q6="select * from packages";
$pack = mysqli_num_rows(mysqli_query($con,$q6));
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
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>User</h3>
								<h4><?php
									echo $users;
								?>
								</h4>
								
							</div>
							<br>
							<p style="text-align: center;"><a href="manage_user.php" class="btn btn-dark">View More</a></p>
							
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
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Enquiries</h3>
								<h4>
								<?php
									echo $enq;
								?>
								</h4>
							</div>
							<br>
							<p style="text-align: center;"><a href="manage_inq.php" class="btn btn-dark">View More</a></p>
						</div>
					</div>						
				
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
						<div class="clearfix"></div>
				</div>
				<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Issues</h3>
								<h4>
								<?php
									echo $ins;
								?>
								</h4>
							</div>
							<br>
							<p style="text-align: center;"><a href="manage_isuue.php" class="btn btn-dark">View More</a></p>
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" style="color:white;"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"style="color:white;"/>
</svg>
							</div>
							<div class="four-text">
								<h3>Review</h3>
								<h4>
								<?php
									echo $review;
								?>
								</h4>
							</div>
							<br>
							<p style="text-align: center;"><a href="manage_review.php" class="btn btn-dark">View More</a></p>
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