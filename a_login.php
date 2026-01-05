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
          <h1 class="form-title">Admin Login</h1>
          </div>
        </div>
        <form method="post"  action="">
        <input type="text" class="form-control" placeholder="Enter username" id="emailid1" name="eid" onblur="demo(this)"autocomplete="off"required>
        <p id="mail1"></p>
        <input type="password" class="form-control" placeholder="Enter Password" id="pass" name="pwd"required>
        <p id="passw"></p>
        <input type="submit" value="sign up" onclick="login()" name="btn" class="login-btn">
          <p class="message">Back To Home? <a href="home.php">Click here</a></p>
        </form>
      </div>
    </div>
</body>
<script>
 function login(){
    var email=document.getElementById('emailid1').value;
    var pwd=document.getElementById('pass').value;
    if(email=="")
    {
        document.getElementById('mail1').innerHTML="username field cannot be empty";
        document.getElementById('mail1').style.color="red";
        document.getElementById('emailid1').style.borderColor="red";
        var vemail="false";
    }
    if(pwd=="")
    {
        document.getElementById('passw').innerHTML="Password field cannot be empty";
        document.getElementById('passw').style.color="red";
        document.getElementById('pass').style.borderColor="red";
        var vpwd="false";
    }
}
</script>
</html>
<?php
if(isset($_POST['btn']))
{
    $em=@$_POST['eid'];
    $p=@$_POST['pwd'];

    $sql5="select * from admin1 where username='$em' and password='$p'";
    $result= mysqli_query($con,$sql5);
    $c= mysqli_num_rows($result);
    if($c==1)
    {
         $_SESSION['admin_user']=$em;
        $_SESSION['admin_pwd']=$p;
        ?>
        <script>
            // alert("login successfully");
            window.location="admin/dashboard.php";
        </script>
        <?php
    }
    else
    {
          ?>
          <script>
            alert("password or email id is incorrect.")
          </script>
          <?php
    }   
}

?>