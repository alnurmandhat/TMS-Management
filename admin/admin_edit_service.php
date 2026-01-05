<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
$id = $_REQUEST['id'];
$q3 = "select * from services where id ='$id'";
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Edit Services </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
  <div class="grid-form1">
  	       <h3 style="color:orange;">Edit Services</h3>
            <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Service icon</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="icon"  placeholder="select Icon" required value="<?php echo $r2[1] ?>">
									</div>
								</div>
                     <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="name" id="packagetype" placeholder=" Service Name" required value="<?php echo $r2[2] ?>">
									</div>
								</div>

                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Details</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50"   name='m'required  ><?php echo $r2[3]?></textarea> 
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
    $s_i1=$_POST['icon'];
    $name=$_POST['name'];
    $msg=$_POST['m'];
    // $i=$_POST[''];
    $q1="update services set icones ='$s_i1', name='$name',Message='$msg' where id='$id'";
    if(mysqli_query($con,$q1))
    {
        if($_FILES['icon']['name']=="")
        {?>
        <script> alert("Successfully Edite");
        window.location = "manage_services.php";</script><?php
            //echo "Select file to upload";
        }
        else
        {   if($_FILES['icon']['type']=="image/jpeg")
            {?>
            <script> alert("Successfully Edited");
            window.location = "manage_services.php";
            </script>
            <?php
              
                move_uploaded_file($_FILES['icon']['tmp_name'],"../images/".$_FILES['icon'] ['name']);
            }
            else
            {?>
            <h2 style="color:green ;">Select jpg file to upload</h2><?php
                //echo "Select jpg file";
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
