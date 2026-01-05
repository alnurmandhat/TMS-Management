<?php
include_once("header.php");
include_once("conection.php");


?>
<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
    <?php
    $sql="select * from packages where status ='Active'";
    $r=mysqli_query($con,$sql);
    while($a=mysqli_fetch_array($r))
    {?>

        <div class="box">
            <img src="images/<?php echo $a[1]; ?>" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i><?php echo $a[2]; ?></h3>
                <p><?php echo $a[3]; ?></p>
                <div class="stars">
                    <?php
                if($a[4]==5)
                    {?>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <?php
                    }
                    else if($a[4]==4)
                    {
                        ?>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    <?php
                    }
                    else if($a[4]==3)
                    {
                        ?>
                        <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <?php
                    }
                 else if($a[4]==2)
                    {
                        ?>
                        <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <?php
                    }
                    else if($a[4]==1)
                    {?>
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
                <div class="price"> <?php echo $a[5]; ?> <span>Rs.9539.08</span> </div>
                <div class="price"> <?php echo $a[6]; ?> </div>
                <a href="booking.php" class="btn" onclick="l()">book now</a>
            </div>
        </div>

        <?php
   }
    ?>
        </div>
    </div>

</section>

<?php
include_once("footer.php");
?>
</body>
</html>
