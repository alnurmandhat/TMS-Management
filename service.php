<?php
include_once("header.php");
include_once("conection.php");
?>
<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <?php
    $sql="select * from services where status ='Active'";
$r=mysqli_query($con,$sql);
while($a=mysqli_fetch_array($r))
{
    ?>
        <div class="box">
            <i class="<?php echo $a[1]; ?>"></i>
            <h3><?php echo $a[2]; ?></h3>
            <p><?php echo $a[3]; ?></p>
        </div>
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