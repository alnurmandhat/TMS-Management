<?php

include_once("conection.php");
require_once("../fpdf185/fpdf.php");
session_start();


$em=$_GET['em'];
$id=$_GET['id'];

$sql="select * from users where emailid='$em'";
$r=mysqli_query($con,$sql);
while($a1=mysqli_fetch_array($r)){
  $pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('helvetica', 'b', 20);
	$pdf->cell(0,10,'Tour & Travel Agency',0,1,'C');
  $pdf->Image("images/$a1[5]",150,20,40,40);
	$pdf->SetFont('Arial', 'b', 12);
  $pdf->cell(0,7,'',0,1);
  $pdf->cell(30,7,'Name :',0,0);
  $pdf->SetFont('helvetica', '', 12);
	$pdf->cell(50,7,$a1[1],0,1);
  $pdf->SetFont('Arial', 'b', 12);
  $pdf->cell(30,7,'Email id :',0,0);
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(50,7,$a1[2],0,1);
  $pdf->SetFont('Arial', 'b', 12);
  $pdf->cell(30,7,'Mobile no. :',0,0);
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(50,7,$a1[4],0,1);
  $pdf->SetFont('Arial', 'b', 12);
  $pdf->cell(30,7,'Booking Id :',0,0);
  $pdf->SetFont('helvetica', '', 12);

  $sql1="select * from booking where email='$em' and bookingid='$id'";
  $result=mysqli_query($con,$sql1);
  while($a=mysqli_fetch_array($result))
  {
    $pdf->cell(50,7,$a[0],0,1);


  $pdf->SetFont('helvetica', 'B', 16);
  $pdf->cell(0,7,'',0,1);
  $pdf->cell(0,10,'Booking Information',1,1,'C');
  $pdf->SetFont('helvetica', 'B', 12);

  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(40,7,'Packeg Name',1,0,'C');
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(60,7,$a[2],1,0,'C');

  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(40,7,'Arrival Date',1,0,'C');
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(0,7,$a[6],1,1,'C');


  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(40,7,'Packeg Type',1,0,'C');
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(60,7,$a[4],1,0,'C');

  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(40,7,'Leaving Date',1,0,'C');
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(0,7,$a[7],1,1,'C');


  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(40,7,'Member',1,0,'C');
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(60,7,$a[5],1,0,'C');

  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(40,7,'Class',1,0,'C');
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(0,7,$a[8],1,1,'C');

  $pdf->cell(0,7,'',0,1);

  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(25,7,'RagDate :',0,0);
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(0,7,$a[9],0,1,);

    $p_name=$a[2];

  } 
  $sql2="select * from packages where packageName='$p_name'";
  $r1=mysqli_query($con,$sql2);
  while($a2=mysqli_fetch_array($r1))
  {
  $pdf->cell(0,1,'',0,1);
  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(40,7,'Packege Price : ',0,0);
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(0,7,$a2[5],0,1);

  $pdf->cell(0,1,'',0,1);
  $pdf->SetFont('helvetica', 'B', 12);
  $pdf->cell(20,7,'Sign : ',0,0);
  $pdf->SetFont('helvetica', '', 12);
  $pdf->cell(7,7,'by ',0,0);
  $pdf->cell(0,7,$a2[6],0,1);
  }

}

if($_GET['ACTION']=='VIEW') 
{
	$pdf->Output('ticket.pdf', 'I'); // I means Inline view
} 
else if($_GET['ACTION']=='DOWNLOAD')
{
	$pdf->Output('ticket.pdf', 'D'); // D means download
}

?>
