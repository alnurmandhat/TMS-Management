<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q3 = "select * from packages where  PackageId='$id'";
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Edit Package </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  	       <h3 style="color:orange;">Edit Package</h3>
             <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PackageImage</label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="pf" required >
									</div>
								</div>
                     <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PackageName</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="pname"  required  value="<?php echo $r2[2]?>">
									</div>
								</div>

                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Details</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="pd" required ><?php echo $r2[3]?></textarea> 
									</div>
								</div>	
                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Rate</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="r"   required value="<?php echo $r2[4]?>">
									</div>
                                    </div>
                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">PackagePrice</label>
									<div class="col-sm-8">
										<input type="number" class="form-control1" name="pr"   required value="<?php echo $r2[5]?>">
									</div>  
                                    </div>
                        <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">TravelName</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="tn"   required  value="<?php echo $r2[6]?>">
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
    $pf=$_FILES['pf']['name'];
    $pn=$_POST['pname'];
    $pd=$_POST['pd'];
     $r=$_POST['r'];
     $pp=$_POST['pr'];
     $tn=$_POST['tn'];
    //  $s=$_POST['s'];
    // $i=$_POST[''];
    $t = date("Y-m-d G:i:s");
    $q1="update packages set PackageImage ='$pf', PackageName='$pn', PackageDetails='$pd' ,
    rate='$r',PackagePrice='$pp', travel_name='$tn',updationdate='$t' where PackageId='$id'";
    if(mysqli_query($con,$q1))
    {   
        if($_FILES['pf']['name']=="")
        {?>
        <script> alert("upload");</script><?php
            //echo "Select file to upload";
        }
        else
        {   if($_FILES['pf']['type']=="image/jpeg")
            {?>
            <script> alert("Successfully edit");
            window.location = "manage_package.php";</script>
            <?php
                //echo "<h2>Sucessfully Registrate</h2><br>";
                move_uploaded_file($_FILES['pf']['tmp_name'],"../images/".$_FILES['pf']['name']);
            }
            
        }
        
            //echo "Select file to upload";
  }
  else{
    ?>
    <script> alert("package failed");
    // window.location="manage_gallery.php";
    </script>
    <?php
  }

}

?>


?>
