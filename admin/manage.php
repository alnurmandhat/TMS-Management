<?php
include_once("includes/sidebarmenu.php");
 include_once("includes/session_set.php");
?>
<link href="css/style1.css" rel='stylesheet' type='text/css' />

<style>

/* Action button drop down */
.dropbtn {
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
}
</style>

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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Manage Packages</li>
            </ol>
<div class="agile-grids">	
				
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2 style="color:orange;">Manage Packages</h2>
					    <table id="table">
						<thead>
						  <tr>
						  <th style="background-color:#ED5C14;" >#</th>
							<th style="background-color:#ED5C14;"  >Name</th>
							<th style="background-color:#ED5C14;" >Type</th>
							<th style="background-color:#ED5C14;" >Location</th>
							<th style="background-color:#ED5C14;" >Price</th>
							<th style="background-color:#ED5C14;" >Creation Date</th>
							<!-- <th style="background-color:#ED5C14;" >Action</th> -->
              <th style="background-color:#ED5C14">EDIT</th>
              <th style="background-color:#ED5C14">DELETE</th>
						  </tr>
						</thead>
						<tbody>
                     <td></td>
					 <td></td>
					 <td></td>
					 <td></td>
					 <td></td>
					 <td></td>
					  <td>
             <!--  <div class="dropdown">
                            <button class="dropbtn">ACTION</button>
                                <div class="dropdown-content">
                                   <a href="#">Change</a>
                                   <a href="#">Delete</a>
                                   <a href="#">View</a>
                                  </div>
                                </div>
                  </div> -->
</td>
</table>
</div>