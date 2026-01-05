<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="tour.css"/>
    <link rel="stylesheet" href="style1.css">
</head>
<!-- <input type="submit" value="Insert new row"> -->
<body style=" background:white;">
    <br><h1 align="center" style="font-size:40; color:#eb5c14;">Issue - Tickets</h1><br>
    <a href="home.php"><input type="button" value="back" class="btn" style="margin-left:40px" ></a><br>
    <br>
  <table border="1">
  <tr>
    <th>Ticket id</th>
    <th>Issue</th>
    <th>Description</th>
    <th>Admin remark</th>
    <th>Reg date</th>
    <th>Remark date</th>
    </tr>
<?php  
include_once("conection.php");
session_start();
$em = $_SESSION['user'];
$sql="select * from issues where UserEmail='$em'";
$result = mysqli_query($con,$sql);
while($f = mysqli_fetch_array($result))
{?>
  <tr>
      <td><?php echo $f[0];?></td>
      <td><?php echo $f[2];?></td>
      <td><?php echo $f[3];?></td>
      <td><?php echo $f[5];?></td>
      <td><?php echo $f[4];?></td>
      <td><?php echo $f[6];?></td>
  </tr>
<?php
}
?>
</table>
</body>
</html>