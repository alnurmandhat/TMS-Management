<?php
include_once("header.php");
include_once("conection.php")
?>

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
                    <img src="images/<?php echo $f[4]; ?>" alt="">
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

<?php
include_once("footer.php");
?>
</body>
</html>