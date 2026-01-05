<?php
include_once("conection.php");
session_start();
include_once("header.php");
$id=$_GET['em'];
$sql="select * from packages where packageid='$id'";
$r=mysqli_query($con,$sql);
?>
<style>
        .p{
            color: rgba(33, 32, 32, 0.658);
            font-size: medium;
            font-style: bold;
            border: 1px solid rgba(95, 94, 94, 0.211);
            height: 40px;
            width: 500px;
        }
    </style>
<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

<?php  include_once("active.php")  ?>

<div class="row">

        <div class="image">
            <img src="book-img.svg" alt="">
        </div>
<?php 
while($a=mysqli_fetch_array($r))
{

?>
        <form action="" method="post">
            <div class="inputBox">
                <h3>where to*</h3>
                <input type="text" value="<?php echo $a[2]; ?>" name="p_name" required>
            </div>
            <div class="inputBox">
                <h3>agency name*</h3>
                <input type="text" value="<?php echo $a[6]; ?>" name="a_name" required>
            </div>
            <div class="inputBox">
                <h3>package type</h3>
                <select id="t" name="type" class="p">
                    <option value=" ">-select type</option>
                    <option value="family package">family package</option>
                    <option value="group package">group package</option>
                    <option value="honeymoon package">honeymoon package</option>
                    <option value="singal traveler">singal traveler</option>
                </select>
            </div>
            <div class="inputBox">
                <h3>how many*</h3>
                <input type="number" name="num" placeholder="number of guests" required>
            </div>
            <div class="inputBox">
                <h3>arrivals*</h3>
                <input type="date" name="a_date" required>
            </div>
            <div class="inputBox">
                <h3>leaving*</h3>
                <input type="date" name="l_date" required>
            </div>
            
            <div class="inputBox">
                <p>this is only for traveler*</p>
                <h3>select class</h3>
                <select id="t" name="class" class="p">
                    <option value=" ">-select class</option>
                    <option value="First Class">First Class</option>
                    <option value="Business Class">Business Class</option>
                    <option value="Premium Economy">Premium Economy</option>
                    <option value="Economy Class(Normal Class)">Economy Class(Normal Class)</option>
                </select>
            </div>
            <input type="submit" class="btn" name="book_btn" value="book now">
            <!-- <button class="btn" >book now</button> -->
        </form>
<?php
}
?>
    </div>

</section>

<?php
include_once("footer.php");
?>
</body>
</html>
<?php
if(isset($_POST['book_btn']))
{ 
    $n = @$_POST['p_name'];
    $an=@$_POST['a_name'];
    $t = @$_POST['type'];
    $num = @$_POST['num'];
    $a= @$_POST['a_date'];
    $l= @$_POST['l_date'];
    $c= @$_POST['class'];
    $em = $_SESSION['user'];
    $time = date("Y-m-d G:i:s");
    $otp = mt_rand(100000, 999999);

    $sql= "insert into booking values('$otp','$em','$n','$an','$t','$num','$a','$l','$c','$time','Active')";

    if(mysqli_query($con,$sql))
    { 
        $_SESSION['reg_msg']="Booking successfully";
      ?>
      <script>
        //   alert('booking successfully');
          window.location="home.php";
      </script>
      <?php
        
    }
    else
    {
        $_SESSION['reg_msg_err']="Booking failed";
        ?>
        <script>
            //alert('failed');
        </script>
        <?php
    }
}
?>