<?php
include_once("header.php");
include_once("conection.php");
?>

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="contact-img.svg" alt="">
        </div>
<form action="">
        <div class="contact container">
      <div>
        <h1 class="section-title" style="color:#eb5c14;font-size:24px;">Contact <span>info.</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="contact-info">
            <h1 style="color:#eb5c14;font-size:24px;">Phone</h1>
            <?php
$sql="select * from contact where status ='Active'";
$r=mysqli_query($con,$sql);
while($a=mysqli_fetch_array($r))
{
  ?>
            <h2><?php echo $a[1]; ?></h2>
            <?php
}
?>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-info">
            <h1 style="color:#eb5c14;font-size:24px;">Email</h1>
            <?php
$sql="select * from contact where status='Active'";
$r=mysqli_query($con,$sql);
while($a=mysqli_fetch_array($r))
{
  ?>
            <h2><?php echo $a[2]; ?></h2>
            <?php
}
?>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-info">
          <h1 style="color:#eb5c14;font-size:24px;">Address</h1>
            <?php
            $sql2="select * from contact_add";
$r2=mysqli_query($con,$sql2);
while($arr=mysqli_fetch_array($r2))
{
?>
            <h2><?php echo $arr[0]; ?></h2>
            <?php
}
?>
          </div>
        </div>
      </div>
    </div>
</form>
    </div>
    
</section>
<?php
include_once("footer.php");
?>
</body>
</html>