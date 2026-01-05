<html>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/icon-font.min.css">
<link rel="stylesheet" href="css/font-awesome.css"> -->
<link href="css/style.css">
<link href="css/admin.css">
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>


</script>
<style>
   /* .header-main{
    color:black;
   } */
</style>

    <body>
<div class="header-main">
					<div class="logo-w3-agile" style="background-color:orange;">
								<h1><a href="dashboard.php" style="background-color:orange;">TOUR & TRAVEL AGENCY</a></h1>
							</div>
						<div class="profile_details w3l" style="background-color:white; border:1px solid black;">		
								<ul>
									<li class="dropdown profile_details_drop" >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="background-color:white;">
										<?php
										$sql="select * from admin1";
										$r=mysqli_query($con,$sql);
										while($a=mysqli_fetch_array($r))
									{ 
										?>
										<div class="profile_img">	
												<span class="prfil-img" style="border:1px solid black; border-radius:50%;"><img src="../images/<?php echo $a[3];?>" alt=""> </span> 
												<div class="user-name">
													<p style="color:orange;" >Welcome</p>
													<p style="color:orange;"><?php echo $a[1];?></p>
												</div>
												<?php
									}
									?>
							<!-- <i class="fa fa-angle-down"></i>
							<i class="fa fa-angle-up"></i>
							<div class="clearfix" ></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="change-password.php"><i class="fa fa-lock" ></i> Setting</a> </li> 
											<li> <a href="logout.php" ><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul> -->
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
</body>
   </html>