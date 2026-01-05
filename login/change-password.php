<link rel="stylesheet" href="profile.css">
<?php
include_once("conection.php");
session_start();
include_once("active.php");
?>
<body style="background:white;">
    <div class="login-page" style="margin-top:84px;">
      <div class="form">
        <div class="login">
          <div class="login-header">
          <h1 class="form-title">Change Password</h1>
          <hr>
          <br>
            <!-- <p>Please enter your credentials to login.</p> -->
          </div>
        </div>
<?php
$em = $_SESSION['user'];
$sql="select * from users where emailid='$em'";
$result=mysqli_query($con,$sql);
while($f = mysqli_fetch_array($result))
{
?>
        <form class="login-form" method="post" enctype="multipart/form-data">
          <lable style="margin-right: 140px; color:eb5c14;">Current Password</lable><br>
          <input type="password" name="pass" placeholder="old Password" style="margin-top:5px;" id="passcheck">
          <p></p>

          <lable style="margin-right:160px; color:eb5c14;">New Password</lable>
<input type="password" class="form-control" placeholder="new Password" id="pass" name="pwd">
<p id="passw"></p>
<lable style="margin-right:140px; color:eb5c14;">Confirm Password</lable>
<input type="password" class="form-control" placeholder="Re-Enter Password" id="password1" name="repwd">
<p id="passw1"></p>

          <input type="submit" value="Change" name="up_btn" id="up" class="login-btn" style="margin-bottom:-19px; margin-top:4px;" onclick="login()">
          </form>
          <br>
          <p>Back to home ? <a href="home.php" style="color:eb5c14;">click here</a></p>
      </div>
    </div>
<?php
}
?>
</body>
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
</html>

<?php

if(isset($_POST['up_btn']))
{
  $old=$_POST['pass'];
  $new = $_POST['pwd'];
  $new1 = $_POST['repwd'];
  $t = date("Y-m-d G:i:s");
 if($old==$_SESSION['pwd'])
 {
  if($new==$new1)
  {
    $sql= "update users set password='$new1' where emailid = '$em'";
  
  if(mysqli_query($con,$sql))
  {  
    $_SESSION['reg_msg']="Password updated successfully";
  }
  else
  {
    $_SESSION['reg_msg_err']="Error in update the password";
  }
}
else{
  $_SESSION['reg_msg_err']="your old password is not match with the current password";
}
}
}
?>