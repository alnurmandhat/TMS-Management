<?php

include_once("includes/session_set.php");
include_once("includes/sidebarmenu.php");
include_once("../conection.php");
mysqli_select_db($con,"tms");

$image = $_SESSION['panel_user'];
$sql="select * from admin_panel where agency_name='$image'";
$result=mysqli_query($con,$sql);
// echo $_SESSION['admin_user'];
?>
 <link href="css/style1.css" rel='stylesheet' type='text/css' />
 <link href="css/table-style.css" rel='stylesheet' type='text/css' />
 
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

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
<?php
while($f = mysqli_fetch_array($result))
{
  ?>
<body>
<!-- <header> -->
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Change Profile</li>
            </ol>
            <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
                  <form   method="post" class="form-horizontal" onSubmit="return(validate_register());"enctype="multipart/form-data">

                      <div class="form-group">
                          <label class="col-md-2 control-label">User name</label>
                          <div class="col-md-8">
                              <div class="input-group">
                               
                                  <input type="text" name="uname" class="form-control1" id="fn1"  value="<?php echo $f[1];?>" >
                              </div>
                          </div>
                          
  </div>
  <div class="form-group">
                          <label class="col-md-2 control-label">Agency name</label>
                          <div class="col-md-8">
                              <div class="input-group">
                               
                                  <input type="text" name="aname" class="form-control1" id="fn1"  value="<?php echo $f[2];?>" readonly>
                              </div>
                          </div>
                          
  </div>
  <div class="form-group">
                          <label class="col-md-2 control-label">Email id</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="em" class="form-control1" id="fn1"  value="<?php echo $f[3];?>" readolny>
                              </div>
                          </div>
                          
  </div>
  <div class="form-group">
                          <label class="col-md-2 control-label">Mobile no.</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" class="form-control1" id="fn1"  value="<?php echo $f[5];?>" name="mobile"  >
                              </div>
                          </div>
                          
  </div>
  <div class="form-group">
                          <label class="col-md-2 control-label">Change Profile</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  
                              <input type="file" class="form-control1" name="pf" required >
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-8 col-sm-offset-2">
              <button type="submit" name="submit" class="btn-primary btn">Submit</button>
              <button type="reset" class="btn-inverse btn">Reset</button>
          </div>
      </div>
      </form>
      <?php
}
?>      
  </div>
</div>
<!-- </div> -->
<?php

if(isset($_POST['submit']))
{
     $u=$_POST['uname'];
     $m=$_POST['mobile'];
     $pf=$_FILES['pf']['name'];
    
    $q1="update admin_panel set username='$u' , mobile=$m ,pro_photo='$pf'  where agency_name='$image'";
  if(mysqli_query($con,$q1))
  {   
      if($_FILES['pf']['name']==" ")
      {?>
      <script> alert("select file to uplaod");</script><?php
          //echo "Select file to upload";
      }
      else
      {   if($_FILES['pf']['type']=="image/jpeg")
          {?>
          <script> alert("Successfully edit");
          window.location = "dashboard.php";</script>
          <?php
              //echo "<h2>Sucessfully Registrate</h2><br>";
              move_uploaded_file($_FILES['pf']['tmp_name'],"../login/images/".$_FILES['pf']['name']);
          }
          
      }
  } else {
      // $_SESSION['error'] = "admin profile  failed";
      ?>
      <script>
        alert("not success");
      </script>
      <?php
  }

?>
  <!-- <script>
      window.location = "change_pro.php";
  </script> -->
<?php
}
?>
</div>
</div>