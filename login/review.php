<?php
include_once("conection.php");

include_once("header.php");
?>

<style>
.row form .inputbox{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.row form .inputbox input{
    
  width:49%;
  margin:1rem 0;
  /* padding:1rem; */
  font-size: 1.7rem;
  /* color:#333; */
  background:#f7f7f7;
  text-transform: none;
}
.row form .inputbox{
  width:49%;
  margin:1rem 0;
  padding:.5rem;
  font-size: 1.7rem;
  /* color:#333; */
  background:#f7f7f7;
  text-transform: none;
}

</style>

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">
    
        <div class="swiper-wrapper">

           <?php
             $sql="select * from review where status='Active'";
             $result=mysqli_query($con,$sql);
             while($f=mysqli_fetch_array($result))
             {?>
                <div class="swiper-slide">
                <div class="box">
                    <img src="../images/<?php echo $f[4]; ?>" alt="">
                    <h3><?php echo $f[1];?></h3>
                    <p><?php echo $f[3];?></p>
                    <div class="stars">
                     <?php
                     if($f[2]==5) 
                     {?>  
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      <?php
                     }
                     else if ($f[2]==4)
                     {?>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                     <?php   
                     }
                     else if($f[2]==3)
                     {
                        ?>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <?php
                     }  
                     else if($f[2]==2)
                     {
                        ?>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <?php
                     }
                     else if($f[2]==1)
                     {
                        ?>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <?php
                     }
                     else
                     {
                        ?>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <?php
                     }
                     ?>
                    </div>
                </div>
                
            </div>
            <?php
             }
           ?>

        </div>

    </div>

</section>

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>A</span>
        <span>d</span>
        <span>d</span>
        <span class="space"></span>
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <?php
    include_once("active.php");
    ?>
    
    <div class="row">

        <form action="" method="post" onsubmit="return my()" enctype="multipart/form-data">
            <div class="inputBox">
                <input type="text" placeholder="Name" id="fname1" autocomplete="off" name="fn">
                <h1 id="fn1"></h1>

                <input type="text" placeholder="Add rate (1-5)" id="mobile1" name="rate" >
                <h1 id="mno"></h1>
            </div>

            <textarea placeholder="Message" name="msg" id="" cols="30" rows="10" required></textarea><br>

            <div class="inputbox">
            <p style="font-size:16px; color:gray;" class="inputbox">Profile photo : </p>
            <input type="file" name="pic" id="photo">
            </div>
            
            <input type="submit" class="btn" value="Add" name="btn" onclick="add()">
        </form>
        <div class="image">
            <img src="review.svg" alt="">
        </div>
    </div>   
</section>

<script>
function add()
{
    var fn=document.getElementById('fname1').value;
    var no=document.getElementById('mobile1').value;
    if(fn=="")
    {
        document.getElementById('fn1').innerHTML="Name field cannot be empty";
        document.getElementById('fn1').style.color="red";
        document.getElementById('fname1').style.borderColor="red";
        var vfn="false";
    }
    else
    {
        var fn123=/^[a-zA-Z ]*$/;
        var e=fn123.test(fn);
        if(e==false)
        {
            document.getElementById('fname1').focus();
            document.getElementById('fn1').innerHTML="Name must contain only letters";
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
    if(no=="")
    {
        document.getElementById('mno').innerHTML="Rate cannot be empty";
        document.getElementById('mno').style.color="red";
        document.getElementById('mobile1').style.borderColor="red";
        var vno="false";
    }
    else
    {
        var mn=/^[1-5]{1}$/;
        var b=mn.test(no);
        if(b==false)
        {
            document.getElementById('mobile1').focus();
            document.getElementById('mno').innerHTML="Invalid rate";
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
}
</script>
<?php
include_once("footer.php");
if(isset($_POST['btn']))
{
    $name = $_POST['fn'];
    $rate = $_POST['rate'];
    $msg = $_POST['msg'];
    $pf = $_FILES['pic']['name'];
    $t = date("Y-m-d G:i:s");
    $q = "insert into review values('','$name',$rate,'$msg','$pf','$t','','Active')";
    // if($_FILES['pic']['name']=="")
    // {
    //     $_SESSION['reg_msg_err']="Select picture for review";
    //     if($_FILES['pic']['type']=="image/jpeg")
    //     {
    //         move_uploaded_file($_FILES['pic']['tmp_name'],"review_photos/".$_FILES['pic'] ['name']);
    //         if(mysqli_query($con,$q))
    //         {   
    //             $_SESSION['reg_msg']="Successfully review added";
    //         }
    //         else
    //         {
    //             $_SESSION['reg_msg_err']="Error in review add";
    //         }
    //     }
    //     else
    //     {
    //         $_SESSION['reg_msg_err']="Select jpg file to upload picture";
    //     }
    // }
    if(mysqli_query($con,$q))
    {
        if($_FILES['pic']['name']=="")
        {
            $_SESSION['reg_msg_err']="Select picture for review";
        }
        else
        {   if($_FILES['pic']['type']=="image/jpeg")
            {
                $_SESSION['reg_msg']="Successfully review added";
                move_uploaded_file($_FILES['pic']['tmp_name'],"../images/".$_FILES['pic']['name']);
            }
            else
            {
                $_SESSION['reg_msg_err']="Select jpg file to upload picture";
            }
        }
    }
}