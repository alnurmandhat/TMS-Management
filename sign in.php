<html>
    <head>
    <link rel="stylesheet" href="style_for_s_in_s_up.css">
    <title>tour and travel agency</title>
    <?php
    include_once("conection.php");
    session_start();
    ?>
    </head>

<body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
          <h1 class="form-title">Sign In</h1>
            <p class="p">Please enter your credentials to sign up.</p>
          </div>
        </div>
        
        <form method="post"  action="">
        <input type="email" class="form-control" placeholder="Enter Email" id="emailid1" name="eid" autocomplete="off" required>
        <p id="mail1"></p>
        <input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pwd" required>
        <p id="passw"></p>
        <p class="message" align="left" style="margin-top: -20px;">you don't remember password?<a href="forgot.php">Checked_here</a></p><br>
        <input type="submit" value="sign in" name="btn" onclick="login()" class="login-btn">
        <p class="message">Not registered? <a href="sign up.php">Create an account</a></p>
      </div>
    </div>
</body>
<script>

  function login(){
    var email=document.getElementById('emailid1').value;
    var pwd=document.getElementById('pass').value;
    if(email=="")
    {
        document.getElementById('mail1').innerHTML="Email Address field cannot be empty";
        document.getElementById('mail1').style.color="red";
        document.getElementById('emailid1').style.borderColor="red";
        var vemail="false";
    }
    else
    {
        var em=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        var a=em.test(email);
        if(a==false)
        {
            document.getElementById('emailid1').focus();
            document.getElementById('mail1').innerHTML="Invalid Email address Please Enter Valid Email Address";
            document.getElementById('mail1').style.color="red";
            document.getElementById('emailid1').style.borderColor="red";
            vemail="false";
        }
        else
        {
            document.getElementById('mail1').innerHTML="";
            document.getElementById('emailid1').style.borderColor="green";
            vemail="true";
        }
    }
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
   if(vpwd=="true" && vemail=="true")
   {
      window.location="home.php";
   }
}
</script>
</html>
<?php
if(isset($_POST['btn']))
{
    $em=@$_POST['eid'];
    $p=@$_POST['pwd'];
  
    $sql5="select * from users where emailid='$em' and password='$p' and status='Active'";
    $result= mysqli_query($con,$sql5);
    $c= mysqli_num_rows($result);
    if($c==1)
    {
         $_SESSION['user']=$em;
        $_SESSION['pwd']=$p;
       
        ?>
        <script>
            alert("login successfully");
            window.location="login/home.php";
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("password or email id is incorrect");
        </script>
        <?php
    }   
}



?>