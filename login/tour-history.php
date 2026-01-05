<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="tour.css"/>
    <link rel="stylesheet" href="style1.css">
</head>
<body style=" background:white;">
    <br><h1 align="center" style="font-size:40;color:#eb5c14;">Tour - History</h1><br>
    <a href="home.php"><input type="button" value="back" class="btn" style="margin-left:40px" ></a><br>
    <br>
    <table border="1">
    <tr>
    <th>Booking id</th>
    <th>Package name</th>
    <th>Package type</th>
    <th>Member</th>
    <!-- <th>Arrivals</th>
    <th>Leaving</th>
    <th>Class</th>
    <th>Booking date</th> -->
    <th>Action</th>
    <th>Ticket PDF</th>
    <th>Cancellation</th>
    </tr>
    <?php    
include_once("conection.php");
session_start();
$em = $_SESSION['user'];
$sql="select * from booking where email ='$em'";
$result=mysqli_query($con,$sql);
while($f = mysqli_fetch_array($result))
{
?>
    <tr>
      <td><?php echo $f[0]; ?></td>
      <!-- <td><?php //echo $f[1]; ?></td> -->
      <td><?php echo $f[2]; ?></td>
      <td><?php echo $f[4]; ?></td>
      <td><?php echo $f[5]; ?></td>
      <!-- <td><?php //echo $f[5]; ?></td>
      <td><?php //echo $f[6]; ?></td>
      <td><?php //echo $f[7]; ?></td>
      <td><?php //echo $f[8]; ?></td> -->
      <td><?php echo $f[10]; ?></td>
      <td>
        <?php

            if($f[10]=='cancel')
            {  
                ?>
               <p>Booking Cancelled</p>
                <?php
               
            }else
            {
                ?>
                <a href="pdf_maker.php?em=<?php echo $f[1]; ?>&id=<?php echo $f[0];?>&ACTION=VIEW" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> View PDF</a> &nbsp;&nbsp; 
                <a href="pdf_maker.php?em=<?php echo $f[1]; ?>&id=<?php echo $f[0];?>&ACTION=DOWNLOAD" class="btn btn-danger"><i class="fa fa-download"></i> Download PDF</a></td>
                <td><a href="cancel.php?em=<?php echo $f[1]; ?>&id=<?php echo $f[0];?>" class="btn btn-danger"><i class="fa fa-download"></i>Cancel</a></td></td>
                <?php
            }
        ?>             
    </tr>
<?php
}
?>
    </table>
    <!-- <input type="submit" value="Back to home" class="btn" style="margin-left:1380px; margin-top:-50px;"> -->
</body>
</html>