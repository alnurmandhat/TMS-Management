<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q3 = "select * from slider where id ='$id'";
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Edit Slider </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  	       <h3 style="color:orange;">Edit Slider</h3>
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal"  method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focused input" class="col-sm-2 control-label">Video</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="f" required value="<?php echo $r2[1] ?>">
									</div>
								</div>
                    
                               
								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="btn" class="btn-primary btn">upload</button>

				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
      </div>
					
					</form>
               </div>
</div>        
<?php
}
include('includes/footer.php');

if(isset($_POST['btn']))
{   
    $filename=$_FILES['file']['name'];
    $tempname=$_FILES['file']['name'];
    $folder=$filename;
    move_uploaded_file($_FILES['file']['tempname'],"../images/".$_FILES['file'] ['name']);
    // move_uploaded_file($tempname,$folder);
    $q1="update slider set photo ='$folder' where id='$id'";
    if(mysqli_query($con,$q1))
    {
        ?>
        <script> alert("EDIT Slider successfully");
        window.location="manage_Slider.php";
    </script>
        <?php
            //echo "Select file to upload";
    }
   else{
     ?>
      <script> alert("Slider Editing failed");
      // window.location="create_services.php";
      </script>
       <?php
       }
}

?>
