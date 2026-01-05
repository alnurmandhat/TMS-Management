<?php
include_once("includes/session_set.php");
include_once("../conection.php");
mysqli_select_db($con,"tms");
$em = $_SESSION['panel_user'];
$sql="select * from admin_panel where agency_name='$em'";
$result=mysqli_query($con,$sql);


include_once("includes/sidebarmenu.php");
// session_start();
?>
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="validation.js"></script>
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

<!-- </header> -->

<?php
while($f= mysqli_fetch_array($result))
{?>
<body>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php" style="background-color:white;">Home</a><i class="fa fa-angle-right"></i>Change Password</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">

  <div class="grid-form1">

  <div class="panel-body">
					<form  method="post" class="form-horizontal" onSubmit="return(validate_change_pwd());">
						<div class="form-group">
							<label class="col-md-2 control-label">Current Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" name="cur_pwd" class="form-control1"
									 id="passcheck" placeholder="old password">
									<p ></p>
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">New Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1"    id="pass" name="pwd" placeholder=" Password">
									<p id="passw"></p>
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">Confirm Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="password3"placeholder="Confrim Password"id="password1" name="repwd">
<p id="passw1"></p>

								</div>
							</div>
						</div>

						<div class="col-sm-8 col-sm-offset-2">
              <button type="submit" name="submit" class="btn-primary btn" onclick="login()">Submit</button>
              <button type="reset" class="btn-inverse btn">Reset</button>
          </div>
		</div>
			
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
<?php
}
?>
<script>
  function login()
  { var pwd=document.getElementById('pass').value;
    var pwd1=document.getElementById('password1').value;
    if(pwd=="")
    {
        document.getElementById('passw').innerHTML="Password field cannot be empty";
        document.getElementById('passw').style.color="red";
        document.getElementById('pass').style.borderColor="red";
        var vpwd="false";
    }
    else
    {
        re = /[0-9]/;
        re1 = /[a-z]/;
        re2 = /[A-Z]/;
        re3=/[!@#\$%\^\&*+=._-]/;
        var a1=pwd.length<6;
        var a2=pwd.length>15;
        var a3=re.test(pwd);
        var a4=re1.test(pwd);
        var a5=re2.test(pwd);
        var a6=re3.test(pwd);
        if(a1==true||(a2==true)||(a3==false)||(a4==false)||(a5==false)||(a6==false))
        {
            document.getElementById('pass').focus();
            var msgpwd="Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character";
            document.getElementById('passw').innerHTML=msgpwd;
            document.getElementById('passw').style.color="red";
            document.getElementById('pass').style.borderColor="red";
            var vpwd="false";
            //alert(vpwd);
        }
        else
        {
            var msgpwd="";
            document.getElementById('passw').innerHTML=msgpwd;
            document.getElementById('pass').style.borderColor="green";
            vpwd="true";
        }
    }
    if(pwd1=="")
    {
        document.getElementById('passw1').innerHTML="Confirm Password field cannot be empty";
        document.getElementById('passw1').style.color="red";
        document.getElementById('password1').style.borderColor="red";
        var vpwd1="false";
    }
    else
    {
        if(pwd1!=pwd)
        {
            document.getElementById('password1').focus();
            document.getElementById('passw1').innerHTML="Password and Confirm Password must be same";
            document.getElementById('passw1').style.color="red";
            document.getElementById('password1').style.borderColor="red";
            vpwd1="false";
        }
        else
        {
            document.getElementById('passw1').innerHTML="";
            document.getElementById('password1').style.borderColor="green";
            vpwd1="true";
        }
    }
  }
</script>

<?php
    
if(isset($_POST['submit']))
{  $old=$_POST['cur_pwd'];
  $new = $_POST['password3'];
  $new1 = $_POST['pwd'];
  if($old==$_SESSION['panel_pwd'])
 {
  if($new==$new1)
  {
    $sql= "update admin_panel set password='$new1' where agency_name = '$em'";
  }
  if(mysqli_query($con,$sql))
  {  ?>
  <script>
    alert("Password updated successfully");
	window.location="dashboard.php";
	</script>
	<?php
}
  else
  {?>
	<script>
	  alert("Error in Updating password");
	  </script>
	  <?php
  }
}}
?>  
<?php

