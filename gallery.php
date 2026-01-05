<?php
include_once("header.php");
include_once("conection.php")
?>

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">
        <?php
    $sql="select * from gallery where status='Active'";
    $r=mysqli_query($con,$sql);
    while($a=mysqli_fetch_array($r))
{ 
    ?>
        <div class="box">
            <img src="images/<?php echo $a[1]; ?>" alt="">
            <div class="content">
                <h3><?php echo $a[2]; ?></h3>
            </div>
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