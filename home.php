<?php
include_once("conection.php");
session_start();
if(isset($_SESSION['user'])&&isset($_SESSION['pwd']))
{ ?>
    <script>
        window.location="login/home.php";
    </script>
    <?php 
}
else if(isset($_SESSION['admin_user'])&&isset($_SESSION['admin_pwd']))
{
    ?>
    <script>
        window.location="admin/dashboard.php";
    </script>
    <?php
}
else if(isset($_SESSION['panel_user']) && isset($_SESSION['panel_pwd']))
{
    ?>
    <script>
        window.location ="package_admin/dashboard.php";
    </script>
    <?php
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tour and travel agency</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <style>
        .wrapper
{
  width: 100%;
  /* margin: 50px auto; */
}
.wrapper .search-input
{
  background: #fff;
  width: 100%;
  border-radius: 5px;
  position: relative;
  box-shadow: 0px 1px 5px 3px rgba(0,0,0,0.12);
}
.search-input input{
  height: 55px;
  width: 100%;
  outline: none;
  border: none;
  border-radius: 5px;
  padding: 0 60px 0 20px;
  font-size: 18px;
  box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
}
.search-input.active input{
  border-radius: 5px 5px 0 0;
}
.search-input .autocom-box{
  padding: 0;
  opacity: 0;
  pointer-events: none;
  max-height: 280px;
  overflow-y: auto;
}
.search-input.active .autocom-box{
  padding: 10px 8px;
  opacity: 1;
  pointer-events: auto;
}
.autocom-box li{
    font-size:15px;
  list-style: none;
  padding: 8px 12px;
  display: none;
  width: 100%;
  cursor: default;
  border-radius: 3px;
}
.search-input.active .autocom-box li{
  display: block;
}
.autocom-box li:hover{
  background: #efefef;
}
.search-input .icon{
  position: absolute;
  right: 0px;
  top: 0px;
  height: 55px;
  width: 55px;
  text-align: center;
  line-height: 55px;
  font-size: 20px;
  color: #644bff;
  cursor: pointer;
}
    </style>

    
<?php
include_once("conection.php");
?>
</head>

<body>
<div class="top-ht">
    <div class="top-navbar-ht" >
        <div class="icons">
        <i class="fas fa-user" id="login-btn"></i>
        <a href="a_login.php" >admin login</a>
        <a href="p_login.php" >add travel agency</a>
        </div>
</div>
    <div class="top-navbar-ht" style="margin-right:-90.0rem;">
        <a href="sign up.php" style="margin-right:-0.0rem;">sign up</a>
        <a href="sign in.php"  style="margin-right:-0.0rem;">/sign in</a>
    </div>
    <div class="icons"></div>
    </div>
    <header class="ht">

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="home.php" class="logo"><span>T</span>ravel</a>

        <nav class="navbar">

            <a href="about.php">about</a>
            <a href="package.php">packages</a>
            <a href="service.php">services</a>
            <a href="gallery.php">gallery</a>
            <a href="review.php">review</a>
            <a href="contact.php">contact</a>
            <a href="enquriy.php">enquriy</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <!-- <i class="fas fa-user" id="login-btn"></i> -->
        </div>

        <!-- <form action="" class="search-bar-container" style="background: rgba(0,0,0,.4);">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form> -->
        <form class="search-bar-container" class="form-control" style="background:rgba(0,0,0,.4);" method="POST">
    <div class="wrapper">
      <div class="search-input">
        <a href="" target="_blank" hidden></a>
        <input type="text" placeholder="Type to search.." name="search" autocomplete="off">
        <div class="autocom-box">
          <!-- here list are inserted from javascript -->
        </div>
        <div class="icon"><i class="fas fa-search"></i></div>
      </div>
    </div>
</form>

    </header>

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="#" onsubmit="return myfun()">
            <h3>login</h3>
            <input type="email" class="box" id="emailcheck" placeholder="enter your email" >
            <input type="password" class="box" id="passcheck" placeholder="enter your password" >
            <button type="submit"  class="btn">login Now</button> 
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have and account? <a href="#">register now</a></p>
        </form>

    </div>


    <section class="home" id="home">

        <div class="content">
            <h3>tour & travel agency</h3>
            <p>adventures are the best way to learn!....</p>
            <a href="about.php" class="btn">read more</a>
        </div>

      
        <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
           
        </div>
       
        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    
    </section>


    <section class="blogs" id="blogs">
        <h1 class="heading">
        <span>b</span>
        <span>l</span>
        <span>o</span>
        <span>g</span>
        <span>s</span>
        <span class="space"></span>
        <span>&</span>
        <span class="space"></span>
        <span>p</span>
        <span>o</span>
        <span>s</span>
        <span>t</span>
        <span>s</span>
    
    <div class="box-container">
        <?php
        $sql="select *from blog";
        $r=mysqli_query($con,$sql);
        while($a=mysqli_fetch_array($r))
        {
            ?>

        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="images/<?php echo $a[1]; ?>" alt="">
            </div>
            <div class="content">
                <a href="#" class="link"><?php echo $a[2]; ?></a>
                <p><?php echo $a[3]; ?></p>
                <div class="icon">
                    <a href="#"><i class="fas fa-clock"></i> <?php echo $a[4]; ?></a>
                    <a href="#"><i class="fas fa-user"></i> <?php echo $a[5]; ?></a>
                </div>
            </div>
        </div>
<?php
        }
        ?>
       
</div>
    
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
    $count=0;
    while($a=mysqli_fetch_array($r))
    {
          $count+=1;
        if($count==4)
        {
            break;
        }
          
        ?>
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
</section>
<a href="package.php" class="btn" style="border-radius:10px; height:50px; width:250px; padding-top:10px;font-size:19px">More Packages</a> 
</section>

<?php
include_once("footer.php");
?>
</body>
</html>
<?php
}
?>

<script>
// getting all required elements
const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            window.location = "package.php";
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = `<li>${data}</li>`;
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        window.location = "package.php";
        // webLink = `https://www.google.com/search?q=${selectData}`;
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = `<li>${userValue}</li>`;
    }else{
      listData = list.join('');
    }
    suggBox.innerHTML = listData;
}

let suggestions = [
    "Goldan",
    "Taj-Mahal",
    "Red-Fort",
    "Rajasthan",
    "Jaipur",
    "Ahmedabad",
    "Surat",
    "Amreli",
    "Bhavnagar",
    "Gandhinagar",
    "Junagadh",
    "Kutch",
    "Surendranagar",
    "Vadodara",
    "Banaskantha",
    "Mehsana",
    "Sabarkantha",
    "Porbandar",
    "Rajkot",
    "Bharuch",
    "Patan",
    "Dahod",
    "Valsad"
];
</script>