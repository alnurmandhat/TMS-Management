<?php
include_once("../conection.php");
mysqli_select_db($con,"tms");
include_once("includes/sidebarmenu.php");
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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Add Gallery</li>
            </ol>

 <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
                  <form  method="post" class="form-horizontal" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="col-md-2 control-label">Image</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="file" name="pf" class="form-control1"  required>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Name Image</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="n" class="form-control1" required>
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Status</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="s" class="form-control1"  required >
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-8 col-sm-offset-2">
              <button type="submit" name="btn" class="btn-primary btn">ADD</button>
              <button type="reset" class="btn-inverse btn">Reset</button>
          </div>
      </div>
          
                  </form>


</div>
</div>
<?php
if(isset($_POST['btn']))
{   $pf=$_FILES['pf']['name'];
    $n_g=$_POST['n'];
    $s=$_POST['s'];
    $q="insert into gallery values('','$pf','$n_g','$s');";
    if(mysqli_query($con,$q))
    {   
        if($_FILES['pf']['name']=="")
        {?>
        <script> alert("Select file to upload");</script><?php
            //echo "Select file to upload";
        }
        else
        {   if($_FILES['pf']['type']=="image/jpeg")
            {?>
            <script> alert("Successfully Added");
            window.location = "manage_gallery.php";</script>
            <?php
                //echo "<h2>Sucessfully Registrate</h2><br>";
                move_uploaded_file($_FILES['pf']['tmp_name'],"../images/".$_FILES['pf'] ['name']);
            }
            else
            {?>
            <h2 style="color:green ;">Select jpg file to upload</h2><?php
                //echo "Select jpg file";
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
