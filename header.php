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
        header .navbar .active{
            color:var(--orange);
            background-color:#333;
        }
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
</head>

<body>
<div class="top">
    <div class="top-navbar" >
        <div class="icons">
        <i class="fas fa-user" id="login-btn"></i>
        <a href="a_login.php">admin login</a>
        <a href="p_login.php" >add travel agency</a>
        </div>
</div>
    <div class="top-navbar" style="margin-right:-90.0rem;">
        <a href="sign up.php" >sign up</a>
        <a href="sign in.php"  >/sign in</a>
    </div>
    <div class="icons"></div>
    </div>
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="home.php" class="logo"><span>T</span>ravel</a>

    <nav class="navbar">
        <a href="about.php" class="<?php if(basename($_SERVER['PHP_SELF'])=="about.php")
                                         {
                                            echo "active";
                                         }?>">about</a>
        <a href="package.php"class="<?php if(basename($_SERVER['PHP_SELF'])=="package.php")
                                         {
                                            echo "active";
                                         }?>">packages</a>
        <a href="service.php"class="<?php if(basename($_SERVER['PHP_SELF'])=="service.php")
                                         {
                                            echo "active";
                                         }?>">services</a>
        <a href="gallery.php"class="<?php if(basename($_SERVER['PHP_SELF'])=="gallery.php")
                                         {
                                            echo "active";
                                         }?>">gallery</a>
        <a href="review.php"class="<?php if(basename($_SERVER['PHP_SELF'])=="review.php")
                                         {
                                            echo "active";
                                         }?>">review</a>
        <a href="contact.php"class="<?php if(basename($_SERVER['PHP_SELF'])=="contact.php")
                                         {
                                            echo "active";
                                         }?>">contact</a>
        <a href="enquriy.php"class="<?php if(basename($_SERVER['PHP_SELF'])=="enquriy.php")
                                         {
                                            echo "active";
                                         }?>">enquiry</a>
    </nav>

    
    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <!-- <i class="fas fa-user" id="login-btn"></i> -->
    </div>

    <!-- <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form> -->

    <form class="search-bar-container" class="form-control" method="POST">
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
        <input type="email" class="box" id="emailcheck" placeholder="enter your email" required>
        <input type="password" class="box" id="passcheck" placeholder="enter your password" required>
        <button type="submit"  class="btn">login</button> 
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>
</div>
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
