<link rel="stylesheet" href="profile.css">
<!-- <script src="validation.js"></script> -->
<?php
include_once("conection.php");
session_start();
include_once("active.php");
?>
<body style="background:white;">
    <div class="login-page" style="margin-top:60px;">
      <div class="form">
        <div class="login">
          <div class="login-header">
          <h1 class="form-title">My profile !!</h1>
          <hr>
          <br>
          </div>
        </div>
<?php
$em = $_SESSION['user'];
$sql="select * from users where emailid='$em'";
$result=mysqli_query($con,$sql);
while($f = mysqli_fetch_array($result))
{
?>
<form onSubmit="return(validate123());" method="post" enctype="multipart/form-data" action="  " class="login-form">

<lable style="margin-right:170px; color:eb5c14;">Profile photo</lable>

<img src="images/<?php echo $f[5];?>" style=" height:13rem;
  width:13rem;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 1rem;">

<input type="file" name="pf" class="form-control" placeholder="Profile pic" required>
<p></p>

<lable style="margin-right:310px; color:eb5c14;">Name</lable>
<input type="text" class="form-control" placeholder="Enter Name" id="fname1" name="fn1" value="<?php echo $f[1];?>">
<p id="fn1"></p>
<lable style="margin-right:310px; color:eb5c14;">Email</lable>
<input type="email" class="form-control" placeholder="Enter Email" id="emailid1" name="eid" onblur="demo(this)" value="<?php echo $f[2];?>" readonly>
<p id="mail1"></p>
<lable style="margin-right:280px; color:eb5c14;">Password</lable>
<input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pwd" value="<?php echo $f[3];?>" readonly>
<p id="passw"></p>
<!-- <lable style="margin-right:225px; color:eb5c14;">Confirm Password</lable>
<input type="password" class="form-control" placeholder="Re-Enter Password" id="password1" name="repwd" value="<?php echo $f[3];?>" readonly>
<p id="passw1"></p> -->
<lable style="margin-right:160px; color:eb5c14;">Mobile number</lable>
<input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile1" name="mobile" value="<?php echo $f[4];?>">
<p id="mno"> </p>
<input type="submit" value="Update" name="btn" class="login-btn">
<p>Back to home ? <a href="home.php" style="color:eb5c14;">click here</a></p>
      </div>
    </div>
</form>
<?php
}
?>
</body>
<script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="val.js"></script>
</script>
</html>

<?php

if(isset($_POST['btn']))
{
  $em =  $_SESSION['user'];
  $n = @$_POST['fn1'];
  $e = @$_POST['eid'];
  $p = @$_POST['pwd'];
  $pn= @$_POST['mobile'];
  $pf=@$_FILES['pf']['name'];

  $sql= "update users set fullname='$n', mobilenumber='$pn', profile='$pf' where emailid = '$em'";          

  if(mysqli_query($con,$sql))
  {  
    $_SESSION['reg_msg']="Data updated successfully";
    if($_FILES['pf']['name']=="")
    {?>
    <script> alert("Select file to upload");</script><?php
    }
    else
    {   if($_FILES['pf']['type']=="image/jpeg")
        {?>
        <script> alert("Successfully registrated");</script>
        <?php
            move_uploaded_file($_FILES['pf']['tmp_name'],"images/".$_FILES['pf']['name']);
        }
        else
        {?>
        <h2 style="color:green ;">Select jpg file to upload</h2><?php
            //echo "Select jpg file";
        }
    }
  }
  else
  {
    $_SESSION['reg_msg_err']="Error in update the data";
  }
}

?>