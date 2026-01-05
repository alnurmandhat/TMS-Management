<!-- https://github.com/Dhruvesh54/2021_SDSCE -->


<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/session_set.php");
$sql2="select *from enquiry";
$ans3=mysqli_query($con,$sql2);
include_once("includes/sidebarmenu.php");
?>

 
 <link href="css/table-style.css" rel='stylesheet' type='text/css' />
 <link href="css/style1.css" rel='stylesheet' type='text/css' />
 
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<style>

/* Action button drop down */
/* .dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: orange;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  background-color:#ED5C14;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:orange;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color:orange;
} */
</style>

 <?php

?>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Manage Enquiry</li>
            </ol>
<div class="agile-grids">	
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2 style="color:orange;">Manage Enquiry</h2>
            <form action="form4.php">
                <div class="row">
                    <div class="col">
                        <a href="form4.php"> <button class="btn btn-danger">Add New Enquiry</button></a>
                    </div>
                </div>
            </form>

					    <table id="table" >
						<thead >
						  <tr>
						  <th style="background-color:#ED5C14;" >#</th>
							<th style="background-color:#ED5C14;"  >Name</th>
							<th style="background-color:#ED5C14;" >Email Id</th>
              <th style="background-color:#ED5C14;" >Mobile No.</th>
							<th style="background-color:#ED5C14;" >Subject </th>
              <th style="background-color:#ED5C14;" >Description </th>
							<!-- <th style="background-color:#ED5C14;" > Role</th> -->
              <!-- <th style="background-color:#ED5C14;">Action</th> -->
              <th style="background-color:#ED5C14">Status</th>
              <!-- <th style="background-color:#ED5C14">EDIT</th> -->
              <th style="background-color:#ED5C14">DELETE</th>
              <th style="background-color:#ED5C14">ACTIVATION</th>
						  </tr>
						</thead>
              
<?php
while($sql3=mysqli_fetch_array($ans3))
{ ?>
  <tr>
      <td><?php echo $sql3[0]; ?></td>
      <td><?php echo $sql3[1]; ?></td>
      <td><?php echo $sql3[2]; ?></td>
      <td><?php echo $sql3[3]; ?></td>
      <td><?php echo $sql3[4]; ?></td>
      <td><?php echo $sql3[5]; ?></td>
      <td><?php echo $sql3[7]; ?></td>
      
      <td> <a href="admin_delete_inq.php?em=<?php echo $sql3[2]; ?>"><button class="btn btn-danger" style="width:100px">Delete</button></a>
      </td>
      <?php
      if ($sql3[7] == "Active") { ?>
          <td> <a href="admin_deactivate_inq.php?em=<?php echo $sql3[2]; ?>"><button class="btn btn-warning" style="width:100px">Deactivate</button></a>
          </td>
      <?php
      } else if ($sql3[7] == "Inactive") {
      ?>
          <td> <a href="admin_activate_inq.php?em=<?php echo $sql3[2]; ?>"><button class="btn btn-success" style="width:100px">Activate</button></a>
          </td>
      <?php
      } else {
      ?>
          <td> <a href="admin_activate_inq.php ?id=<?php echo $sql3[0]; ?>"><button class="btn btn-success" style="width:100px">Activate</button></a>
          </td>
      <?php
      }
      ?>
  </tr>
<?php
}
?>
</table>
    </div>
    </div>
    <?php include('includes/footer.php');?>
    </div>
</div>
</div>

   <script src="js/bootstrap.min.js"></script>
    </body>
    <script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		
<?php
?>
