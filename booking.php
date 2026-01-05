<?php
include_once("header.php");
include_once("conection.php");
session_start();
if (isset($_SESSION['user']) && isset($_SESSION['pwd'])) 
{
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

    <div class="row">

        <div class="image">
            <img src="book-img.svg" alt="">
        </div>

        <form action="" onsubmit="return m()">
            <div class="inputBox">
                <h3>where to*</h3>
                <input type="text" placeholder="number of guests" required>
            </div>
            <div class="inputBox">
                <h3>how many*</h3>
                <input type="number" placeholder="number of guests" required>
            </div>
            <div class="inputBox">
                <h3>arrivals*</h3>
                <input type="date"required>
            </div>
            <div class="inputBox">
                <h3>leaving*</h3>
                <input type="date" required>
            </div>
            
            <div class="inputBox">
                <p>this is only for travels*</p>
                <h3>select class</h3>
                <select id="t" class="p">
                    <option value=" ">-select class</option>
                    <option value="First Class">First Class</option>
                    <option value="Business Class">Business Class</option>
                    <option value="Premium Economy">Premium Economy</option>
                    <option value="Economy Class(Normal Class)">Economy Class(Normal Class)</option>
                </select>
            </div>
            <input type="submit" class="btn" value="book now">
            <!-- <button class="btn" >book now</button> -->
        </form>

    </div>

</section>
<?php
include_once("footer.php");
?>
</body>
</html>
<?php
}
else
{
    ?>
    <script>
        window.location="sign in.php";
    </script>
    <?php

}