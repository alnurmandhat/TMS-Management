<?php
include_once("conection.php");
session_start();
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
    
</head>

<body>
<?php 
    include_once("header.php");
?>

|<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>H</span>
        <span>o</span>
        <span>W</span>
        <span class="space"></span>
        <span>w</span>
        <span>e</span>
        <span class="space"></span>
        <span>c</span>
        <span>a</span>
        <span>n</span>
        <span class="space"></span>
        <span>h</span>        
        <span>e</span>
        <span>l</span>
        <span>p</span>
        <span class="space"></span>
        <span>y</span>
        <span>o</span>
        <span>u</span>
    </h1>

    <?php
        include_once("active.php");
    ?>

    <div class="row">

        <div class="image">
            <img src="write-img.svg" alt="">
        </div>
        <form action="" method="post" onsubmit="return my()">
        <div class="input-box">
        <ul>
            <li class="na-me">
			<select id="country" name="issue" class="frm-field required sect" >
				<option value="">Select Issue</option> 		
			    <option value="Booking Issues">Booking Issues</option>
				<option value="Cancellation"> Cancellation</option>
			    <option value="Refund">Refund</option>
			    <option value="Other">Other</option>														
			</select>
            </li>
            <li class="descrip">
			<input class="special" type="text" placeholder="description"  name="description" >
		    </li>
			<div class="clearfix"></div>
		</ul>
        </div> 
            <input type="submit" class="btn" value="submit" name="btn">
        </form>

    </div>
    
</section>

<?php 
include_once("footer.php");

if(isset($_POST['btn']))
{
    $em = $_SESSION['user'];
    $iss=$_POST['issue'];
    $des=$_POST['description'];
    $t = date("Y-m-d G:i:s");
    $sql="insert into issues values('','$em','$iss','$des','$t','Pending','','Active')";
    if(mysqli_query($con,$sql))
    {
        $_SESSION['reg_msg'] = "Your issue submitted successfully";
    } 
    else 
    {
        $_SESSION['reg_msg_err'] = "Error in submit issue";
    }
}

?>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="script2.js"></script>

</body>

</html>