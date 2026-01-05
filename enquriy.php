<?php
include_once("header.php");
include_once("conection.php");
?>

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>e</span>
        <span>n</span>
        <span>q</span>
        <span>u</span>
        <span>i</span>
        <span>r</span>
        <span>y</span>
</h1>

    <div class="row">

    <form method="post"  action="">
            <div class="inputBox">
            <input type="text" class="form-control" placeholder="Name" id="fname1" name="fn1"><br>
            <p id="fn1"></p>
            <input type="email" class="form-control" placeholder="email@gmail.com" id="emailid1" name="eid" onblur="demo(this)"><br>
            <p id="mail1"></p>
            </div>
            <div class="inputBox">
            <input type="text" class="form-control" placeholder="Mobile Number" id="mobile1" name="mobile"> <br>
            <p id="mno"> </p>
                <input type="text" placeholder="subject" name="sub" required>
            </div>
            <textarea placeholder="description" name="long" id="" cols="30" rows="10" required></textarea>
            <input type="submit" class="btn" onclick="enquriy()" value="submit" name="btn">
        </form>
        <div class="image">
            <img src="enquairy-img.svg" alt="">
        </div>
    </div>
    
</section>

<?php
include_once("footer.php");
?>
</body>
<script>
function enquriy(){
    var fn=document.getElementById('fname1').value;
    var email=document.getElementById('emailid1').value;
    var no=document.getElementById('mobile1').value;
    if(fn=="")
    {
        //alert("error");
        document.getElementById('fn1').innerHTML="Full name field cannot be empty";
        document.getElementById('fn1').style.color="red";
        document.getElementById('fname1').style.borderColor="red";
        var vfn="false";
    }
    else
    {
        var fn123=/^[a-zA-Z ]*$/;
        //alert ("demooooooooooo");
        var e=fn123.test(fn);
       // alert(e);
        if(e==false)
        {
            document.getElementById('fname1').focus();
            document.getElementById('fn1').innerHTML="Full name must contain only letters";
            document.getElementById('fn1').style.color="red";
            document.getElementById('fname1').style.borderColor="red";
            vfn="false";
        }
        else
        {
            document.getElementById('fn1').innerHTML="";
            document.getElementById('fname1').style.borderColor="green";
            vfn="true";
        }
    }
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
    if(no=="")
    {
        document.getElementById('mno').innerHTML="Mobile  number cannot be empty";
        document.getElementById('mno').style.color="red";
        document.getElementById('mobile1').style.borderColor="red";
        var vno="false";
    }
    else
    {
        var mn=/^[0-9]{10}$/;
        var b=mn.test(no);
        if(b==false)
        {
            document.getElementById('mobile1').focus();
            document.getElementById('mno').innerHTML="Invalid Mobile Number Please Enter Valid Mobile Number";
            document.getElementById('mno').style.color="red";
            document.getElementById('mobile1').style.borderColor="red";
            vno="false";
        }
        else
        {

            document.getElementById('mno').innerHTML="";
            document.getElementById('mobile1').style.borderColor="green";
            vno="true";
        }
    }
    if(vfn=="true" && vno=="true" && vemail=="true")
    {
       window.location="enquriy.php";
    }   
}

</script>
</html>
<?php
if(isset($_POST['btn']))
{ 
    $n = @$_POST['fn1'];
    $e = @$_POST['eid'];
    $pn= @$_POST['mobile'];
    $s = @$_POST['sub'];
    $l = @$_POST['long'];
    $s_time = date("Y-m-d G:i:s");

    $sql= "insert into enquiry values('','$n','$e','$pn','$s','$l',' $s_time','Active')";

    if(mysqli_query($con,$sql))
    {   $_SESSION['reg_msg']="enquiry successfully submited";
      ?>
      <script>
          alert('enquiry successfully submited');
          window.location="home.php";
      </script>
      <?php
        
    }
    else
    {$_SESSION['reg_msg_err']="enquiry failed";
        ?>
        <script>
            alert('failed');
        </script>
        <?php
    }
}

?>