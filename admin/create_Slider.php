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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Create Slider</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  	       <h3 style="color:orange;">Create Slider</h3>
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focused input" class="col-sm-2 control-label">Slider</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="f" required>
									</div>
								</div>
                                                    <div class="form-group">
									<label for="focused input" class="col-sm-2 control-label">Status</label>
									<div class="col-sm-8">
                                    <input type="text" class="form-control1" name="s" required>
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
    $s=$_POST['f'];
    $name=$_POST['s'];
    $q1="insert into slider values('','$s','$name')";
    if(mysqli_query($con,$q1))
    {
        ?>
        <script> alert("Create Slider successfully");
        window.location="manage_Slider.php";
    </script>
        <?php
            //echo "Select file to upload";
    }
   else{
     ?>
      <script> alert("Slider failed");
      // window.location="create_services.php";
      </script>
       <?php
       }
}

?>
