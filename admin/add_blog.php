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
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Add Blog</li>
            </ol>

 <div class="grid-form">

<div class="grid-form1">

<div class="panel-body">
                  <form  method="post" class="form-horizontal" onSubmit="return valid();">
                      <div class="form-group">
                          <label class="col-md-2 control-label">Photo</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="file" name="img" class="form-control1" id="exampleInputPassword1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label">Slogan
                          </label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="sl" class="form-control1" required="">
                              </div>
                          </div>
                      </div>
                      <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Text</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="txt" required></textarea> 
									</div>
								</div>

                      <div class="form-group">
                          <label class="col-md-2 control-label">Status</label>
                          <div class="col-md-8">
                              <div class="input-group">
                                  <input type="text" name="s" class="form-control1" id="exampleInputPassword1" required="" name="s">
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
if(isset($_POST['btn_a']))
{
    $i=$_FILES['i']['name'];
    $sl=$_POST['sl'];
    $txt=$_POST['txt'];
    $s=$_POST['s'];
    $t = date("Y-m-d G:i:s");
    $q="insert into blog values('','$i','$sl','$txt','$t','$s');";
    if(mysqli_query($con,$q))
    {   
        if($_FILES['i']['name']=="")
        {?>
        <script> alert("Select file to upload");</script><?php
            //echo "Select file to upload";
        }
        else
        {   if($_FILES['i']['type']=="image/jpeg")
            {?>
            <script> alert("Successfully Added");
            window.location = "manage_blog.php";</script>
            <?php
                //echo "<h2>Sucessfully Registrate</h2><br>";
                move_uploaded_file($_FILES['i']['tmp_name'],"../images/".$_FILES['i'] ['name']);
            }
            
        }
        
            //echo "Select file to upload";
  }
  else{
    ?>
    <script> alert("blog failed");
    // window.location="manage_gallery.php";
    </script>
    <?php
  }
}