<!-- create table packages -->
<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
// include_once("includes/session_set.php");
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Create Services </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  	       <h3 style="color:orange;">Create Services</h3>
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Service icon</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="service" required>
									</div>
								</div>
                     <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="n"  placeholder=" Service Name" required>
									</div>
								</div>

                                <div class="form-group">
									<label for="focused input" class="col-sm-2 control-label">Message</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="m" required></textarea> 
									</div>
								</div>
                                <div class="form-group">
									<label for="focused input" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8">
                                    <input type="text" class="form-control1" name="s"  required>
									</div>
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
        $i=$_FILES['service']['name'];
        $name=$_POST['n'];
        $msg=$_POST['m'];
        $s=$_POST['s'];
    // $i=$_POST[''];
    $q1="insert into services values('','$i','$name','$msg','$s')";
    if(mysqli_query($con,$q1))
    {
        if($_FILES['service']['name']=="")
        {?>
        <script> alert("Select file to upload");
        window.location = "manage_services.php";</script><?php
            //echo "Select file to upload";
        }
        else
        {   if($_FILES['service']['type']=="image/jpeg")
            {?>
            <script> alert("service create Successfully");
            window.location = "manage_services.php";</script>
            <?php
                
                move_uploaded_file($_FILES['service']['tmp_name'],"../images/".$_FILES['service'] ['name']);
            }

           
        }
    }
   else{
     ?>
      <script> alert("Services failed");
      // window.location="create_services.php";
      </script>
       <?php
       }
}

?>
