<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q3 = "select * from gallery where id ='$id'";
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Edit Gallery </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  	       <h3 style="color:orange;">Edit Gallery</h3>
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal"  method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="icon"  placeholder="select Icon" required value="<?php echo $r2[1] ?>">
									</div>
								</div>
                     <div class="form-group">
									<label for="focused input" class="col-sm-2 control-label">Name Image</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="name"  placeholder=" Service Name" required value="<?php echo $r2[2] ?>">
									</div>
								</div>
                                
								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="btn1" class="btn-primary btn">upload</button>

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
if(isset($_POST['btn1']))
{   
    $icon1= $_FILES['icon']['name'];
    $name=$_POST['name'];
    $q12="update gallery set images='$icon1', name_img='$name' where id='$id'";
    if(mysqli_query($con,$q12))
    {   
        if($_FILES['icon']['name']=="")
        {?>
        <script> alert("Select file to upload");</script><?php
            //echo "Select file to upload";
        }
        else
        {   if($_FILES['icon']['type']=="image/jpeg")
            {?>
            <script> alert("Successfully Added");
            window.location = "manage_gallery.php";</script>
            <?php
                //echo "<h2>Sucessfully Registrate</h2><br>";
                move_uploaded_file($_FILES['icon']['tmp_name'],"../images/".$_FILES['icon']['name']);
            }
            
        }
        
            //echo "Select file to upload";
  }
  else{
    ?>
    <script> alert("gallery failed");
    // window.location="manage_gallery.php";
    </script>
    <?php
  }

}

?>
