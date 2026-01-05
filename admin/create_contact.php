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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Create Contact</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  	       <h3 style="color:orange;">Create Contact</h3>
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Phone Number / Name </label>
									<div class="col-sm-8">
										<input type="name" class="form-control1" name="phone" required>
									</div>
								</div>
                     <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-8">
										<input type="email" class="form-control1" name="name"  required>
									</div>
								</div>

                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="s" required>
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
    $p=$_POST['phone'];
    $name=$_POST['name'];
    $s=$_POST['s'];
    // $i=$_POST[''];
    $q1="insert into contact values('','$p','$name','$s')";
    if(mysqli_query($con,$q1))
    {
        ?>
        <script> alert("Create contact successfully");
        window.location="manage_contact.php";
    </script>
        <?php
            //echo "Select file to upload";
    }
   else{
     ?>
      <script> alert("Contact failed");
      // window.location="create_services.php";
      </script>
       <?php
       }
}

?>
