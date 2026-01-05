<!-- create table packages -->
<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/session_set.php");

include_once("includes/sidebarmenu.php");
$type=$_SESSION['panel_user'];
?>
<!-- <header> -->
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
        <?php
        include_once("includes/header.php");
        ?>
        <div class="clearfix"> </div>	
        
<!-- </header> -->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Create Packages</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  	       <h3 style="color:orange;">Create Packages</h3>
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PackageImage</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="pi" required>
									</div>
								</div>
                     <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PackageName</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="pname"  required>
									</div>
								</div>

                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Details</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="pd" required></textarea> 
									</div>
								</div>		
                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Rate</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="r"   required>
									</div>
                                    </div>
                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PackagePrice</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="pr"   required>
									</div>  
                                    </div>
                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">AgencyName</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="tn" value='<?php echo $type; ?>'   required>
									</div>  
                                    </div>
                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="s"   required>
									</div>                                                 
                        </div>
								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="btn" class="btn-primary btn">Create</button>

				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
      </div>
					
					</form>
               </div>
</div>        
<?php
include('includes/footer.php');

if(isset($_POST['btn']))
{   
   $pi=$_FILES['pi']['name'];
   $pn=$_POST['pname'];
   $pd=$_POST['pd'];
    $r=$_POST['r'];
    $pp=$_POST['pr'];
    $tn=$_POST['tn'];
    $s=$_POST['s'];
	$t = date("Y-m-d G:i:s");
   $q1="insert into packages values('','$pi','$pn','$pd','$r','$pp','$tn','$t','','$s')";
   if(mysqli_query($con,$q1))
   {   
	   if($_FILES['pi']['name']=="")
	   {?>
	   <script> alert("Select file to upload");</script><?php
		   //echo "Select file to upload";
	   }
	   else
	   {   if($_FILES['pi']['type']=="image/jpeg")
		   {?>
		   <script> alert("Successfully Added");
		   window.location = "manage_package.php";</script>
		   <?php
			   //echo "<h2>Sucessfully Registrate</h2><br>";
			   move_uploaded_file($_FILES['pi']['tmp_name'],"../images/".$_FILES['pi'] ['name']);
		   }
		   
	   }
	   
		   //echo "Select file to upload";
 }
 else{
   ?>
   <script> alert("services failed");
   // window.location="manage_gallery.php";
   </script>
   <?php
 }

}

?>
